@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Home page</h4>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">

        var viewObj = info.view.viewSpec.type;
        var formattedDate = formatDateObj(dateObj, dateFormat);
        var formattedTime = formatDateObj(dateObj, timeFormat);

        ( isDoctorOfficeDay(doctorOfficeDays, dateObj) &&
          isDoctorOfficeHour(doctorOfficeDays, dateObj) &&
          isNotPast(dateObj) )
        ? scheduleAppModal.modal('show') : '';

        appDate.val(formattedDate);
        appTime.val(viewObj == 'dSayGridMonth' ? earliestBusinessOpen : formattedTime);
        appButton.text('Schedule').attr('id', 'scheduleAppButton');
        deleteAppButton.hide();
    </script>
@endsection

