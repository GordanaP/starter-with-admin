<?php

namespace App\Repositories;

use App\Doctor;
use App\Patient;
use App\Appointment;
use App\Utilities\AbstractDelete;
use Illuminate\Support\Facades\Request;

class AppointmentRepository extends AbstractDelete
{
    /**
     * The doctor
     *
     * @var integer
     */
    private $doctor;

    /**
     * The patient
     *
     * @var integer
     */
    private $old_patient;

    /**
     * Create a new repository instance.
     */
    public function __construct()
    {
        $this->model = Appointment::class;
        $this->doctor = Doctor::find(Request::route('doctor'));
        $this->old_patient = Patient::find(request('patient'));
    }

    /**
     * Schedule an appointment.
     *
     * @param  array $data
     */
    public function schedule($data): Appointment
    {
        $date = Request::appDate($data);
        $patient = $this->patient($data);

        return $this->doctor->scheduleAppointment($patient, $date);
    }

    /**
     * Reschedule the appointment.
     *
     * @param  array $data
     */
    public function reschedule($appointment, $data): Appointment
    {
        $appointment->start_at = Request::appDate($data);;
        $appointment->save();

        return $appointment;
    }

    /**
     * The patient scheduling an appointment.
     *
     * @param  array $data
     */
    private function patient($data): Patient
    {
        return $this->old_patient ?? $this->doctor->addPatient($data);
    }
}