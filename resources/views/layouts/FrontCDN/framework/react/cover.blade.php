@extends('layouts.FrontCDN.framework.react.coverreact')

@section('cover')

    <div>
        <div key={item.ID}>
            <img src={Img+item.Cover_Name} />
        </div>
    </div>

@stop
