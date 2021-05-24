<table id="page-length-option" class="display">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Tanggal Pengajuan</th>
                                                            <th>File Administrasi</th>
                                                            <th>File Bukti Fisik</th>
                                                            <th>Detail</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php $no = 0;?>
                                                        @foreach($Data as $t)
                                                        @foreach($t->Histori_datas as $a)
                                                        <?php $no++ ;?>
                                                        <tr>
                                                            <td> {{$no}} </td>
                                                            <td> {{$a->id}} </td>
                                                            <td> {{$a->user_id}}  </td>

                                                            <td>
                                                            {{$a->data_id}}
                                                            </td>

                                                            <td>
                                                             {{$a->verifikator}}
                                                            </td>

                                                            <td>
                                                             {{$a->hasil_verifikator}}
                                                            </td>

                                                            <td>

                                                            {{$a->keterangan}}
    
                                                            </td>

                                                        </tr>
                                                        @endforeach
                                                        @endforeach

                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama</th>
                                                            <th>Tanggal Pengajuan</th>
                                                            <th>File Administrasi</th>
                                                            <th>File Bukti Fisik</th>
                                                            <th>Detail</th>

                                                        </tr>
                                                    </tfoot>
                                                </table>