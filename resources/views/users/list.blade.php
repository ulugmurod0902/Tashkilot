<hatml>
    <body>
    <h1>
        Foydalanuvchilar ro'yxati
    </h1>
    <ul>
        @foreach($plans as $x)
            <li>{{$x}}</li>
        @endforeach
    </ul>

{{--    <ul>--}}
{{--        @foreach($userlist as $x)--}}
{{--            <li>{{$x}}</li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}
    </body>
</hatml>
