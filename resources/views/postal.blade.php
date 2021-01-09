<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>SilverLining Postal Search</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"
            type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"
            type="text/javascript"></script>
</head>
<body>
<div class="postalSearch">
    @livewire('postal-render')
</div>
<div class="modal fade" id="result" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Postal Information</h5>
            </div>
            <div class="modal-body">
                @if(isset($postal))
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Primary Beat: {{$postal->area}}</h4>
                        <p>Area: {{$postal->area}}</p>
                        <p>District: {{($postal->district != 0 ? $postal->district : "Not LSPD")}}</p>
                        <p>DNR?: {{($postal->isDNR != 0 ? "yes" : "no")}}</p>
                        <hr>
                        <p class="mb-0">Click below to Dismiss</p>
                    </div>
                @endif

            </div>
            <div class="modal-footer">
                <button type="button" id="btnClose" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
</body>
@livewireScripts
<script type="text/javascript">
    $('#btnSubmit').click(function () {
        $('#result').modal('show');
    })
    $('#btnClose').click(function () {
        $('#result').modal('hide');
    })
</script>
</html>
