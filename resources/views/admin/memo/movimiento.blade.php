<!DOCTYPE html>
<html>
<head>
    <style>
        hr {
            border-top: 0.5px solid rgb(182, 180, 180);
        }






    </style>
       {{-- <center><img src="{{storage_path('images/MUVHG.jpg')}}" class="imagencentro" width="950" height="140"></center> --}}

    </head>
    <div class="card-header">
        <center><h4>Ficha del Documento</h4></center>
    </div>

    <table style="font-size: 13px;" CELLPADDING=5 CELLSPACING=0 width="750">
        <tr>
            <td>
                <strong>N°:</strong>  {{ $memo->number_memo }}
            </td>
            <td>
                <strong>Fecha_Doc:</strong>  {{ date('d/m/Y',strtotime(trim($memo->date_doc))) }}
            </td>
            <td>
                <strong>Referencia:</strong>  {{ $memo->ref }}
            </td>

        </tr>
        <tr>
            <td colspan="2">
                <strong>Origen:</strong>  {{$memo->post_odependencia->name}}
            </td>
            <td colspan="3">
                <strong>Destino:</strong>  {{$memo->post_ddependencia->name}}
            </td>
        </tr>
        <tr>

            <td>
                <strong>Fecha_Entrada:</strong>  {{ date('d/m/Y H:i:s',strtotime(trim($memo->date_entry))) }}
            </td>
            <td>
                <strong>Observación:</strong>  {{ $memo->obs }}
            </td>
            <td>
                <strong>Recepcionado por:</strong>  {{ $memo->user_admin->full_name }}
            </td>
        </tr>
    </table>

<body>
</br>

<table style="font-size: 12px;" CELLPADDING=5 CELLSPACING=0 width="750">


        <tr>
        <td style="border: 1px solid">
            <b>Origen</b>
        </td>
        <td style="border: 1px solid">
            <b>Destino</b>
        </td>
        <td style="border: 1px solid">
            <b>Fecha Entrada</b>
        </td>
        <td style="border: 1px solid">
            <b>Fecha Salida</b>
        </td>
        <td style="border: 1px solid">
            <b>Observación</b>
        </td>
        <td style="border: 1px solid">
            <b>Recepcionado por</b>
        </td>

        <td style="border: 1px solid">
            <b>Estado</b>
        </td>

        </tr>
        @foreach ($detalle as $item)
        <tr>
            <td style="border: 1px solid"> {{ $item->post_odependencia->name }}</td>
            <td style="border: 1px solid"> {{ $item->post_ddependencia->name }}</td>
            @if (empty($item->date_entry))
                <td style="border: 1px solid"></td>
            @else
                <td style="border: 1px solid"> {{ date('d/m/Y H:i:s',strtotime(trim($item->date_entry))) }}</td>
            @endif
            @if (empty($item->date_exit))
                <td style="border: 1px solid"></td>
            @else
                <td style="border: 1px solid"> {{ date('d/m/Y H:i:s',strtotime(trim($item->date_exit))) }}</td>
            @endif

            <td style="border: 1px solid"> {{ $item->obs }}</td>
            <td style="border: 1px solid"> {{ $item->user_admin->full_name }}</td>
            <td style="border: 1px solid"> {{ $item->estado->name}}</td>
        </tr>
        @endforeach
</table>
<p style="font-weight: bold;">Total de movimientos: {{ $contar }}</p>
</body>
</html>
