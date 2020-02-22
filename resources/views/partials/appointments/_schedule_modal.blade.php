<div class="modal fade" id="scheduleAppModal" tabindex="-1" role="dialog"
aria-labelledby="scheduleAppModal" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select a patient</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @if (! $doctor)
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input"
                            name="patient_type" id="oldPatient" value="old" checked>
                            Old patient
                        </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                            <input type="radio" class="form-check-input"
                            name="patient_type" id="newPatient" value="new">
                            New patient
                        </label>
                    </div>
                @else
                    @include('partials.appointments._schedule_form', [
                        'doctor' => $doctor ?? null,
                        'patient' => $patient ?? null,
                    ])
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" id="scheduleAppButton">Submit</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>