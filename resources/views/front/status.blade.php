@extends('main.home')
@section('isi')
    <div class="container p-5 mx-auto text-center">
        <div class="flex justify-center my-3">
            <span class="mr-2 text-sm text-slate-500">light</span>
            <input type="checkbox" id="toggle" class="hidden">
            <label for="toggle">
                <div class="w-9 h-5 bg-slate-500 rounded-full flex items-center p-1 cursor-pointer">
                    <div class="w-4 h-4 bg-white rounded-full toggle-circle"></div>
                </div>
            </label>
            <span class="ml-2 text-sm text-slate-500">dark</span>
        </div>
        <div class="border my-10 py-10  shadow-lg rounded-lg p-10 dark:shadow-slate-800">
            <div class="border shadow-lg rounded-lg p-6 mr-3 ml-auto lg:w-1/4">
                <div class=""></div>
                <h2 id="tgl" class="text-right"></h2>
            </div>
            <div class=" lg:flex ">
                <div class="suhu border rounded-lg p-2 lg:p-6 lg:w-1/2 my-6 ">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white" id="textsuhu">Suhu</span>
                        <span id="ceksuhu"
                            class="text-sm font-medium text-blue-700 dark:text-white after:content-['*']"></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" id="suhu"></div>
                    </div>
                </div>
                <div class="lembab border rounded-lg p-2 lg:p-6 lg:w-1/2 lg:mx-3 my-6">
                    <div class="flex justify-between mb-1">
                        <span class="text-base font-medium text-blue-700 dark:text-white">Kelembapan</span>
                        <span class="text-sm font-medium text-blue-700 dark:text-white after:content-['%']"
                            id="ceklembab"></span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                        <div class="bg-blue-600 h-2.5 rounded-full" id="lembab"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('script')
    <script src={{ asset('js/toggle.js') }}></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $suhu = $("#ceksuhu").load("ceksuhu.php").text();
                $lembab = $("#ceklembab").load('ceklembab.php').text();
                $('#tgl').load('tanggal.php').text();
                $('#suhu').css('width', $suhu + '%');
                if ($suhu >= 20) {
                    $('#suhu').css('background-color', 'red');
                    $("#ceksuhu").css('color', 'red');
                    $("#textsuhu").css('color', 'red');
                    $('#alert').text('Panas');
                } else {
                    $('#suhu').css('background-color', '#4285F4');
                    $('#alert').text('Normal');
                }
                $('#lembab').css('width', $lembab + '%');
            }, 1000);
        });
    </script>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $suhu = $("#ceksuhu").load("ceksuhu.php").text();
                $lembab = $("#ceklembab").load('ceklembab.php').text();
                $('#tgl').load('tanggal.php').text();
                // $('#alert').load('keterangan.php');
                // $suhu = $("#ceksuhu").text();
                // $lembab = $('#ceklembab').text();
                $('#suhu').css('width', $suhu + '%');
                if ($suhu >= 20) {
                    $('#suhu').css('background-color', 'red');
                    $("#ceksuhu").css('color', 'red');
                    $("#textsuhu").css('color', 'red');
                    $('#alert').text('Panas');
                } else {
                    $('#suhu').css('background-color', '#4285F4');
                    $('#alert').text('Normal');
                }
                $('#lembab').css('width', $lembab + '%');
            }, 1000);
        });
    </script>
    <script src={{ asset('js/toggle.js') }}></script>
@endsection
