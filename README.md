# rangkuman Video Laracasts
##### Source : [Laracast](https://www.youtube.com/playlist?list=PL3VM-unCzF8ipG50KDjnzhugceoSG3RTC)

## Video 1 - Memilih bahasa pemrograman
#### Pembukaan video, memilih bahasa apa yang akan digunakan untuk membuat website

## Video 2 - memilih dan installasi tools
#### Memilih tools (Terminal, database, dan text-editor) yang dianggap pas dengan pengguna

## Video 3 - Tag PHP
#### Di dalam php, untuk memulai menuliskan tag php dimulai dengan tulisan berikut
```
<?php
  //code line
?>
```
#### Untuk menamplkan hasil tulisan file dengan format .php dapat menggunakan code berikut di terminal anda
```
php -S localhost:8000
```
#### Untuk menampilkan baris kode ke web browser, di dalam tag php, digunakan perintah ``` echo ```, Contoh:
```
<?php     echo "Hello, Commander";?>
```
##  Video 4 - Variables
####  php, penamaan variabel dapat dinamai dengan menggunakan tanda ``` $ ```, contoh:
```
<?php
  $greeting = "Hello, ";
  echo "$greeting World";
  echo "<br>";
?>
```
#### perbedaan ``` " ``` dengan ``` ' ``` jika ingin mengembalikan nilai variabel, maka harus menggunakan ``` " ``` untuk mengembalikan nilai variabel. Simbol ``` ' ``` digunakan untuk menampilkan isi dari echo apa adanya

## Video 5 - Boolean
#### Contoh penggunaan boolean sederhana dengan menggunakan if else:
```
<?php 
  $name = "The Book Of Vishanti";
  $read = true;

  if($read){
    $message = "You have read $name";
  }else{
    $message = "You did'nt have read $name";
  }
?>
<h1>
  <?= $message; ?>
  // atau bisa juga menggunakan echo biasa <?php echo "$message"; ?>
</h1>
```

#### Di php echo dapat di singkat dengan menggunakan ``` <?= message ?> ```

## Video 6 - Array
