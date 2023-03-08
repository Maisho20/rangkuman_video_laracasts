# rangkuman Video Laracasts
##### Source : [Laracast](https://www.youtube.com/playlist?list=PL3VM-unCzF8ipG50KDjnzhugceoSG3RTC)

## Video 1 - Memilih bahasa pemrograman
#### Memilih bahasa apa yang akan digunakan untuk membuat website
Dalam Memilih bahasa pemrograman, kita harus mempertimbangkan tujuan apa yang kita miliki saat ingin belajar bahasa tersebut. Jadi dalam memilih bahasa pemrograman harus sesuai dengan tujuan kita. Contohnya apabila kita ingin membuat situs web, kita bisa belajar bahasa pemrograman seperti HTML, CSS, dan JS. Jika kita ingin membuat aplikasi desktop, kita mungkin bisa memilih bahasa seperti Python, C++, atau Java. Jika kita benar benar baru dalam pemrograman, cobalah memilih bahasa yang lebih mudah seperti Python atau Ruby. Setelah itu kita bisa mempertimbangkan jenis proyek yang kita ingin kerjakan di masa depan, jika kita ingin menjadi seorang pengembang Game, kita bisa memilih bahasa C++ atau C#, dan apa bila kita ingin fokus pada pengembangan Web, kita bisa memilih bahasa JavaScript atau PHP.

## Video 2 - memilih dan installasi tools
#### Memilih tools (Terminal, database, dan text-editor) yang dianggap pas dengan pengguna
##### Ada beberapa Tools yang diperlukan untuk menjalankan PHP Seperti :
1. Text Editor: Dalam pengembangan web, text editor digunakan untuk menulis kode program. Ada banyak pilihan text editor gratis dan berbayar yang tersedia, seperti Visual Studio Code dan Sublime Text.
2. Terminal: Terminal adalah alat yang digunakan untuk mengeksekusi perintah pada sistem operasi. Dalam pengembangan web dengan PHP, terminal digunakan untuk menjalankan perintah seperti menjalankan server web lokal atau menginstal paket PHP.
3. PHP: PHP harus diinstal di server untuk dapat menjalankan aplikasi web PHP. PHP menyediakan banyak fungsi dan fitur untuk memproses data dan menghasilkan konten dinamis pada website.
4. Local Development Environment: Saat membangun situs web, seringkali lebih mudah untuk membangun dan menguji di lingkungan lokal. Ada beberapa alat yang tersedia untuk membuat lingkungan pengembangan lokal, seperti XAMPP, MAMP, atau WAMP.
5. Browser: Browser digunakan untuk menampilkan halaman web yang dihasilkan oleh aplikasi web PHP. Beberapa pilihan browser yang populer antara lain Google Chrome, Mozilla Firefox, dan Microsoft Edge.Browser: Browser digunakan untuk menampilkan halaman web yang dihasilkan oleh aplikasi web PHP. Beberapa pilihan browser yang populer antara lain Google Chrome, Mozilla Firefox, dan Microsoft Edge.
6. Version Control: Version control digunakan untuk melacak perubahan pada kode program dan bekerja sama dengan tim. Salah satu platform version control yang populer adalah Git dan tersedia beberapa hosting Git seperti GitHub, GitLab, Bitbucket.

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
<?php echo "Hello, Commander";?>
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
#### Array Merupakan sebuah tipe data terstruktur yang dapat menyimpan banyak data dengan suatu nama yang sama dan menempati tempat di memori yang berurutan serta bertipe data yang berbeda-beda
#### Secara umum, jika membuat list sederhana dalam html, kita dapat menggunakan
```
<h1>Recommended Steam Games</h1>

<ul>
  <li>Dota 2</li>
  <li>Counter-Strike: Global Offensive</li>
  <li>Need for Speed™ Heat</li>
</ul>
```
#### Namun, jika ingin membuat sebuah kumpulan data yang disimpan di dalam array lalu menampilakn di html, kita dapat menggunakan kode sebagai berikut
```
<h1>Recommended Steam Games</h1>

<?php
  $games = [
    "Dota 2",
    "Counter-Strike: Global Offensive",
    "Need for Speed™ Heat"
  ];
?>
```
#### Untuk pemanggilan data pada array dapat menggunakan looping foreach di dalam tag html sebagai berikut
```
<ul>
  <?php foreach ($games as $game){
    echo "<li>$game</li>";
  }
  ?>
</ul>
```
#### Alternatif lain:
```
<?php
  $games = [
    "Dota 2",
    "Counter-Strike: Global Offensive",
    "Need for Speed™ Heat"
  ];
?>
<ul>
  <?php foreach ($games as $game) :?>
    <li><?= $game ?></li>
  <?php endforeach; ?>
</ul>
```

## Video 7 - Associative Array
#### Associative Array merupakan array yang memiliki nilai key dan value
Berikut merupakan contoh pemanggilan array biasa menggunakan value
```
<?php
  $games = [
    "Dota 2", --> data 0
    "Counter-Strike: Global Offensive", --> data 1
    "Need for Speed™ Heat" --> data 2
  ];
?>
<p>
    <?= $games[0] ?>
</p>
```

#### Berikut Merupakan contoh penggunaan Associative Array untuk memanggil isi array yang belih rinci
```
<h1>Recommended Steam Games</h1>

<?php
  $games = [
    [
      'name' => "Dota 2",
      'publisher' => "Valve",
      'links' => "https://store.steampowered.com/app/570/Dota_2/"
    ],
    [
      'name' => "Counter-Strike: Global Offensive",
      'publisher' => "Valve",
      'links' => "https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"
    ],
    [
      'name' => "Need for Speed™ Heat",
      'publisher' => "Electronic Arts",
      'links' => "https://store.steampowered.com/app/1222680/Need_for_Speed_Heat/"
    ]
  ];
?>
```
#### untuk pemanggilannya dapat menggunakan code berikut
```
<ul>
  <li>
      <?php foreach ($games as $game): ?>
        <h2><?= $game['name'] ?></h2> 
        <p> By <?= $game['publisher'] ?></p> 
        <a href="<?= $game['links'] ?>">Download Now</a> 
      <?php endforeach ?>
  </li>
</ul>
```
