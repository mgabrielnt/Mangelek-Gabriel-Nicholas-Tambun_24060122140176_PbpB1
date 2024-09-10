<?php
function hitung_rata($array) {
    $total = 0;
    $jumlah = count($array);
    

    foreach ($array as $nilai) {
        $total += $nilai;
    }

    return $total / $jumlah;
}

function print_mhs($array_mhs) {
    echo '<table border="1" cellpadding="5" cellspacing="0">';
    echo '<tr>
            <th>Nama</th>
            <th>Nilai 1</th>
            <th>Nilai 2</th>
            <th>Nilai 3</th>
            <th>Rata2</th>
        </tr>';
    
    foreach ($array_mhs as $nama => $nilai) {

        $rata_rata = hitung_rata($nilai);

        echo '<tr>';
        echo '<td>' . $nama . '</td>';
        echo '<td>' . $nilai[0] . '</td>';
        echo '<td>' . $nilai[1] . '</td>';
        echo '<td>' . $nilai[2] . '</td>';
        echo '<td>' . $rata_rata . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}
?>
