<?php

namespace App\Exports;

use App\Estudiante;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class EstudiantesExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Estudiante::all();
    }
    public function headings(): array
    {
        return [
            'ID',
            'Cedula Aspirante',
            'Nombres del Estudiante',
            'Apellidos del Estudiante',
            'Lugar de Nacimiento del Estudiante',
            'Fecha de Nacimiento del Estudiante',
            'Numero de Hermanos del Estudiante',
            'Lugar que Ocupa el Estudiante',
            'Nacionalidad del Estudiante',
            'Etnia del Estudiante',
            'Correo Electrónico del Estudiante',
            'Parroquia del domicilio del Estudiante',
            'Barrio del domicilio del Estudiante',
            'Calle Principal del Domicilio del Estudiante',
            'Calle Secundaria del Domicilio del Estudiante',
            'Cedula de la madre del Estudiante',
            'Nombres de la madre del Estudiante',
            'Apellidos de la madre del Estudiante',
            'Estado Civil de la madre del Estudiante',
            'Profesion de la madre del Estudiante',
            'Lugar de trabajo de la madre del Estudiante',
            'Numero Telefono de la madre del Estudiante',
            'Numero de Celular de la madre del Estudiante',
            'Correo electrónico de la madre del Estudiante',
            'Cedula del padre del Estudiante',
            'Nombres del padre del Estudiante',
            'Apellidos del padre del Estudiante',
            'Estado Civil del padre del Estudiante',
            'Profesion del padre del Estudiante',
            'Lugar de trabajo del padre del Estudiante',
            'Numero Telefono del padre del Estudiante',
            'Numero de Celular del padre del Estudiante',
            'Correo electrónico del padre del Estudiante',
            'Cedula del representante del Estudiante',
            'Nombres del representante del Estudiante',
            'Apellidos del representante del Estudiante',
            'Estado Civil del representante del Estudiante',
            'Profesion del representante del Estudiante',
            'Lugar de trabajo del representante del Estudiante',
            'Numero Telefono del representante  del Estudiante',
            'Numero de Celular del representante  del Estudiante',
            'Correo electrónico del representante del Estudiante',
            'Curso del Estudiante',
            'Institución de Procedencia del Estudiante',
            'Ciudad de la Institución de la procedencia del Estudiante',
            'Url de Pago (Si esta vacio aun no se ha realizado el Pago)',
            'Fecha de Pago (Si esta vacio aun no se ha realizado el Pago)',
            'Url fotografia del estudiante',
            'Inscrito en el escolastico (0. No, 1.Si)',
            'Numero de Cedula Para la Factura',
            'Nombres para la Factura',
            'Apellidos para la Factura',
            'Correo Electronico para la Factura',
            'Direccion Para la factura',
            'Telefono Para la factura',
            'Nacionalidad del contrato',
            'Calles del contrato',
            'Sector del contrato',
            'Canton del contrato',
            'Provincia del contrato',
            'Aceptar ser fotografiado del contrato',
            'Esta de acuerdo con los terminos del contrato (on. Si , of.No)',
            ' ',
            ' ',
            ' ',
            'Fecha de Creación',
            'Fecha de Modificación',
        ];
    }
}
