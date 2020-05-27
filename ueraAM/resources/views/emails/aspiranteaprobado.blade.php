<!DOCTYPE html>
<html lang="es-ES">
<head>
    <meta charset="utf-8">
</head>
    <body>
        <h2>¡Aspirante aprobado!</h2>

        <div>
            Se ha aprobado un nuevo aspirante
        </div>
        <p>
            Los datos del aspirante nuevo son:
        </p>
        <br>
        <table>
            <tr>
                <th>Nombres completos</th>
                <th>E-mail</th>
                <th>Curso al que fue aprobado</th>
            </tr>
            <tr>
                <td>{!! $nombres !!}</td>
                <td>{!! $email !!}</td>
                <td>{!! $curso !!}</td>

            </tr>
        </table>

    </body>
</html>