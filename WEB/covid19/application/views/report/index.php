<?php
$pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
$pdf->SetTitle('Report Data Pelapor');
$pdf->SetHeaderMargin(30);
$pdf->SetTopMargin(20);
$pdf->setFooterMargin(20);
$pdf->SetAutoPageBreak(true);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
$pdf->AddPage();
$i = 0;
$html = '<h3>Daftar Siswa</h3>
                    <table cellspacing="1" bgcolor="#666666" cellpadding="2">
                        <tr bgcolor="#ffffff">
                            <th width="5%" align="center">No</th>
                            <th width="15%" align="center">Nama</th>
                            <th width="15%" align="center">Alamat</th>
                            <th width="40%" align="center">Pernyataan</th>
                        </tr>';
foreach ($lapor as $l) {
    $i++;
    $html .= '<tr bgcolor="#ffffff">
                            <td align="center">' . $i . '</td>
                            <td>' . $l['nama'] . '</td>
                            <td>' . $l['alamat'] . '</td>
                            <td>' . $l['pernyataan'] . '</td>
                        </tr>';
}
$html .= '</table>';
$pdf->writeHTML($html, true, false, true, false, '');
$pdf->Output('report_pelapor.pdf', 'I');
