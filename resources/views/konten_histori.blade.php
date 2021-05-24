<?php
$page = "historipengajuan";
?>

@extends('historipengajuan')
@section('extra-content')

<tbody>

<!-- <?php $no = 0;?> -->
@foreach($Data as $t)
@foreach($t->Histori_datas as $a)
<!-- <?php $no++ ;?> -->
<tr>
    <td>
        tanggal : {{date('d-m-Y', strtotime($a->created_at))}}

    </td>
    <br>

    <td>
        keterangan : {{$a->keterangan}}
    </td>
    <br>

    <td>
        verifikator : {{$a->verifikator}}
    </td>
    <br>
    <td>
        verifikasi :
        @if($a->hasil_verifikator === 1)
        {{ "diterima"}}
        @else
        {{"ditolak"}}

        @endif

    </td>
    <br>

</tr>
<br>
@endforeach
@endforeach

</tbody>
@endsection