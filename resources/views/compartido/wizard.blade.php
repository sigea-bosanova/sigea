<!DOCTYPE>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>jQuery Steps Full Validation </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    {!! Html::style('css/jquery-steps/jquery.steps.css') !!}
    {!! Html::style('css/jquery-steps/bootstrap.min.css') !!}
    {!! Html::style('css/jquery-steps/bootstrap-theme.min.css') !!}


</head>
<body>



<h1> <p class="text-danger text-center"> Wizard Demo </p> </h1>


<div class="col-md-1"></div>
<div class="col-md-10">
    <style type="text/css">
        /* Adjust the height of section */
        #profileForm .content {
            min-height: 100px;
        }
        #profileForm .content > .body {
            width: 100%;
            height: auto;
            padding: 15px;
            position: relative;
        }
    </style>

    {!! Form::open(['id' => 'example-advanced-form', 'method' => 'post', 'route' => 'form.wizard']) !!}

        <h3>Account</h3>
        <fieldset>
            <legend>Account Information</legend>

            {!! Form::label('Username *',null,  ['for' => 'userName-2']) !!}
            {!! Form::text('userName',null ,['id' => 'userName-2', 'name' => 'userName', 'class' => 'required form-control']) !!}

            {!! Form::label('Password *',null,  ['for' => 'password-2']) !!}
            {!! Form::text('password-2',null ,['id' => 'password-2', 'name' => 'password', 'class' => 'required form-control']) !!}

            {!! Form::label('Confirm Password *',null,  ['for' => 'confirm-2']) !!}
            {!! Form::text('confirm-2',null ,['id' => 'confirm-2', 'name' => 'confirm', 'class' => 'required form-control']) !!}



            <p>(*) Mandatory</p>
        </fieldset>

        <h3>Profile</h3>
        <fieldset>
            <legend>Profile Information</legend>


            <label for="name-2">First name *</label>
            <input id="name-2" name="name" type="text" class="required">
            <label for="surname-2">Last name *</label>
            <input id="surname-2" name="surname" type="text" class="required">
            <label for="email-2">Email *</label>
            <input id="email-2" name="email" type="text" class="required email">
            <label for="address-2">Address</label>
            <input id="address-2" name="address" type="text">
            <label for="age-2">Age (The warning step will show up if age is less than 18) *</label>
            <input id="age-2" name="age" type="text" class="required number">
            <p>(*) Mandatory</p>
        </fieldset>

        <h3>Warning</h3>
        <fieldset>
            <legend>You are to young</legend>

            <p>Please go away ;-)</p>
        </fieldset>

        <h3>Finish</h3>
        <fieldset>
            <legend>Terms and Conditions</legend>

            <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
        </fieldset>

    {!! Form::close() !!}


    <div class="modal fade" id="final" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Welcome</h4>
                </div>
                <div class="modal-body">
                    <p class="text-center">Thanks for signing up</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-md-1"></div>

    {!! Html::script('js/jquery-steps/jquery-2.1.4.js') !!}
    {!! Html::script('js/jquery-steps/jquery.steps.js') !!}
    {!! Html::script('js/jquery-steps/bootstrap.min.js') !!}
    {!! Html::script('js/jquery-steps/jquery-validate-1.13.1.js') !!}
    {!! Html::script('js/jquery-steps/messages_es.js') !!}






<script>

    var form = $("#example-advanced-form").show();

    form.steps({
        headerTag: "h3",
        bodyTag: "fieldset",
        transitionEffect: "slideLeft",
        onStepChanging: function (event, currentIndex, newIndex)
        {
            // Allways allow previous action even if the current form is not valid!
            if (currentIndex > newIndex)
            {
                return true;
            }
            // Forbid next action on "Warning" step if the user is to young
            if (newIndex === 3 && Number($("#age-2").val()) < 18)
            {
                return false;
            }
            // Needed in some cases if the user went back (clean up)
            if (currentIndex < newIndex)
            {
                // To remove error styles
                form.find(".body:eq(" + newIndex + ") label.error").remove();
                form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
            }
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        },
        onStepChanged: function (event, currentIndex, priorIndex)
        {
            // Used to skip the "Warning" step if the user is old enough.
            if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
            {
                form.steps("next");
            }
            // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
            if (currentIndex === 2 && priorIndex === 3)
            {
                form.steps("previous");
            }
        },
        onFinishing: function (event, currentIndex)
        {
            form.validate().settings.ignore = ":disabled";

            return form.valid();
        },
        onFinished: function (event, currentIndex)
        {

            $('#final').modal();


        }
    }).validate({
        errorPlacement: function errorPlacement(error, element) { element.before(error); },
        rules: {
            confirm: {
                equalTo: "#password-2"
            }
        }
    });
</script>


</body>
</html>