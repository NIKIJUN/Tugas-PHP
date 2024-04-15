<?php
class Mahasiswa {
    public $nim;
    public $nama;
    public $kuliah;
    public $nilai;
    public $grade;
    public $predikat;
    public $status;

    public function __construct($nim, $nama, $kuliah, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->nilai = $nilai;
        $this->hitungGradePredikatStatus();
    }

    private function hitungGradePredikatStatus() {
        if ($this->nilai >= 85) {
            $this->grade = 'A';
            $this->predikat = 'Sangat Memuaskan';
        } elseif ($this->nilai >= 75) {
            $this->grade = 'B';
            $this->predikat = 'Memuaskan';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
            $this->predikat = 'Cukup';
        } elseif ($this->nilai >= 40) {
            $this->grade = 'D';
            $this->predikat = 'Kurang';
        } else {
            $this->grade = 'E';
            $this->predikat = 'Sangat Kurang';
        }

        $this->status = ($this->nilai >= 65) ? 'Lulus' : 'Tidak Lulus';
    }
}
?>
