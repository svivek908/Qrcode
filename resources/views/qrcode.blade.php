<!DOCTYPE html>
@include('header')  


    <div class="container mt-4">

        <div class="card">
            <div class="card-header">
                <h2>User QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->generate(URL::to('/edit_profile')) !!}
            </div>
        </div>

        <!-- <div class="card">
            <div class="card-header">
                <h2>Color QR Code</h2>
            </div>
            <div class="card-body">
                {!! QrCode::size(300)->backgroundColor(255,90,0)->generate('http://127.0.0.1:8000/qrcode') !!}
            </div>
        </div> -->

    </div>
</body>
</html>