<div class="table-responsive">
    <h3 class="" style="text-align : center">UNIVERSITAS PELITA HARAPAN</h3>

    <h3 class="" style="text-align : center">Pengajuan Replacement Class</h3>
    <br>

    <p>Hal/ <i>About</i> : Permohonan pengganti waktu kuliah, kuliah tambahan dan perubahan jadwal kelas/</p> <i>Proposalfor Class Substitution/ Additional Class Session/ Class ScheduleChanges</i>
    <br>
    
    <p>Kepada Yth.<i>/To</i></p> 
    <p>Kaprodi Sistem Informasi/ <i>Head of Department</i> Sistem Informasi Kampus Kota Medan</p>
    <p>Fakultas/ <i>Faculty</i> Ilmu Komputer</p>
    <p>Universitas Pelita Harapan Medan <i>Campus</i></p>
    <br>

    <p>Dengan ini memberitahukan bahwa/ <i>Hereby inform you that</i> :</p>
    @foreach($replacementClass as $item)
    <p style="margin-left: 30px">Nama Dosen/ <i>Lecturer Name</i> : {{ $item->nama_lengkap }}</p>
    <p style="margin-left: 30px">Mata Kuliah/ <i>Subject</i> : {{ $item->mata_kuliah }}</p>
    <p style="margin-left: 30px">Prodi/ <i>Study Program</i> : Sistem Informasi -Kampus Kota Medan- Kelas/ <i>Class</i> : {{ $item->kelas }}</p>
    <p style="margin-left: 30px">Semester/ <i>Semester</i>: Ganjil</p>
    <p style="margin-left: 30px">Tahun Akademik/ <i>AcademicYear</i>: 2022/2023</p>

    <p>Bermaksud mengganti jadwal kelas/ <i>Mean to replace a class schedule :</i></p>
    <p style="margin-left: 30px">Tanggal : {{ $item->jadwal_kuliah }}</p>
    <p style="margin-left: 30px">Waktu : {{ $item->jam_kuliah }}</p>

    <p>Menjadi / <i>Become :</i></p>
    <p style="margin-left: 30px">Tanggal : {{ $item->tanggal_replacement }}</p>
    <p style="margin-left: 30px">Waktu : {{ $item->jam_replacement }}</p>
    <p style="margin-left: 30px">Alasan : {{ $item->alasan }}</p>
    @endforeach
    <br>

    <p>Atas perhatian dan persetujuan Bapak / Ibu kami ucapkan terima kasih.</p>
    <i>Thank you for your attention and approval</i>
    <p>Medan, 22 November 2022</p>
    <p class="" style="text-align: center"><i>True Knowledge, Faith in Christ, Godly Character</i></p>

</div>
