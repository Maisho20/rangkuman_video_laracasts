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
```php
<?php
  //code line
?>
```
#### Untuk menamplkan hasil tulisan file dengan format .php dapat menggunakan code berikut di terminal anda
```php
php -S localhost:8000
```
#### Untuk menampilkan baris kode ke web browser, di dalam tag php, digunakan perintah ``` echo ```, Contoh:
```php
<?php echo "Hello, Commander";?>
```
##  Video 4 - Variables
####  Di php, penamaan variabel dapat dinamai dengan menggunakan tanda ``` $ ```, contoh:
```php
<?php
  $greeting = "Hello, ";
  echo "$greeting World";
  echo "<br>";
?>
```
#### perbedaan ``` " ``` dengan ``` ' ``` jika ingin mengembalikan nilai variabel, maka harus menggunakan ``` " ``` untuk mengembalikan nilai variabel. Simbol ``` ' ``` digunakan untuk menampilkan isi dari echo apa adanya

## Video 5 - Conditionals and Boolean
#### Contoh penggunaan boolean sederhana dengan menggunakan if else:
```php
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
```php
<h1>Recommended Steam Games</h1>

<ul>
  <li>Dota 2</li>
  <li>Counter-Strike: Global Offensive</li>
  <li>Need for Speed™ Heat</li>
</ul>
```
#### Namun, jika ingin membuat sebuah kumpulan data yang disimpan di dalam array lalu menampilakn di html, kita dapat menggunakan kode sebagai berikut
```php
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
```php
<ul>
  <?php foreach ($games as $game){
    echo "<li>$game</li>";
  }
  ?>
</ul>
```
#### Alternatif lain:
```php
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
```php
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
```php
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
```php
<ul>
      <?php foreach ($games as $game): ?>
        <li>
          <h2><?= $game['name'] ?></h2> 
          <p> By <?= $game['publisher'] ?></p> 
          <a href="<?= $game['links'] ?>">Download Now</a>
        </li>
      <?php endforeach ?>
</ul>
```

## Video 8 - Functions And Filtering
#### Functions adalah blok kode yang dapat dipanggil berulang kali dalam sebuah program, dan dapat membantu mempermudah pembuatan program
#### Filtering pada PHP adalah proses memvalidasi dan memanipulasi input yang diberikan oleh pengguna.
#### Dalam filtering tanda ``` = ``` jika hanya terdapat 1, maka akan berfungsi mengembalikan nilai yang ada di database menjadi nilai yang kita inputkan dalam perulangan dan jika ingin menggunakan ``` = ``` untuk pengecekan atau filtering dapat menggunakan 3 tanda ``` = ```

#### Penggunaan filtering sederhana
```php
<?php foreach ($games as $game): ?>
  <?php if($game['publisher'] == 'valve') : ?> <== Proses filtering
    <li>
      <h2><?= $game['name'] ?></h2> 
      <p> By <?= $game['publisher'] ?></p>
      <a href="<?= $game['links'] ?>" target="_blank">Download Now</a>
    </li>
  <?php endif ?>
<?php endforeach ?>
```
#### Di dalam sebuah fungsi bisa di isikan berbagai macam perintah seperti looping, boolean, array dan lain sebagainya. cara menggunakan fungsi di php kita harus mendeklarasi dahulu sebuah fungsi lalu memanggilnya
#### Berikut contoh pembuatan dan pemanggilan fungsi sederhana
```php
<?php 
  function filterByPublisher() { //<---Deklarasi fungsi
    //
  };
?>
<P>
  <?= filterByPublisher() ?> //<---Pemanggilan fungsi
</p>
```
#### Mengabungkan filtering dengan fungsi
```php
    //database yang dibuat
    <?php
     $games = [
        [
            'name' => "Dota 2",
            'publisher' => "Valve",
            'releaseDate' => "10 Jul, 2013",
            'links' => "https://store.steampowered.com/app/570/Dota_2/"
        ],
        [
            'name' => "Counter-Strike: Global Offensive",
            'publisher' => "Valve",
            'releaseDate' => "22 Aug, 2012",
            'links' => "https://store.steampowered.com/app/730/CounterStrike_Global_Offensive/"
        ],
        [
            'name' => "Need for Speed™ Heat",
            'publisher' => "Electronic Arts",
            'releaseDate' => "8 nov, 2019",
            'links' => "https://store.steampowered.com/app/1222680/Need_for_Speed_Heat/"
        ]
     ];
        
        //pembuatan fungsi
        function filterByPublisher($games) {
            $filteredGames = [];

            foreach ($games as $game){
                if ($game['publisher'] === 'Valve'){
                    $filteredGames[] = $game;
                }
            }
            return $filteredGames;
        };
    ?>
    
    <ul>
        <!-- penggunaan filtering dengan fungsi -->
        <?php foreach (filterByPublisher($games) as $game): ?>
            <li>
                <h2><?= $game['name'] ?></h2> 
                <p> By <?= $game['publisher'] ?></p>
                <a href="<?= $game['links'] ?>" target="_blank">Download Now</a> 
            </li>
        <?php endforeach ?>
    </ul>
```

## Video 9 - Lambda Functions
#### Function dapat digunakan untuk menfilter game berdasarkan ``` publisher ``` tetapi jika kita ingin menambahkan opsi filter lagi, kita harus membuat function baru. Sehingga kita bisa menggunakan lambda function untuk membuat function yang lebih dinamis. Function yang dibuat sebelumnya juga dapat dimasukkan ke dalam sebuah variabel yang dinamakan ``` extract variable ```

#### Contoh penggunaan
```php
<ul>
  <?php $filterByPublisher = filterByPublisher($games, 'Valve'); ?> <!--  extract variable -->
  <?php foreach ($filterByPublisher as $game): ?>
    <li>
      <h2><?= $game['name'] ?></h2> 
      <p> By <?= $game['publisher'] ?></p>
      <a href="<?= $game['links'] ?>" target="_blank">Download Now</a> 
    </li>
  <?php endforeach ?>
</ul>
```


## Video 10 - Separate PHP Logic From the Template

## Video 11 - Technical Check-In

## Video 12 - Page Links

## Video 13 - Partials

## Video 14 - Superglobals and Current Page Styling

## Video 15 - Make a PHP Router

## Video 16 - Create a MySql Database

## Video 17 - PDO First Steps

## Video 18 - Extract a PHP Database Class

## Video 19 - Environments and Configuration

## Video 20 - SQL Injection Vulnerabilities Explained

## Video 21 - Mini-Project: Notes App

## Video 22 - Render the Notes and Note Page

## Video 23 - Introduction to Authorization

## Video 24 - Programming is Rewriting

## Video 25 - Intro to Forms and Request Methods

## Video 26 - Always Escape Untrusted Input

## Video 27 - Introduction to Form Validation

## Video 28 - Extract a Simple Validation Class

## Video 29 - Resourceful Naming Conventions

## Video 30 - Autoloading and Extraction

## Video 31 - Namespacing : What, Why, How

## Video 32 - Handle Multiple Request Methods From a Controller Action

## Video 33 - Build a Better PHP Router

## Video 34 - One Request, One Controller

## Video 35 - Make Your First Service Container

## Video 36 - Updating a Resource With PATCH

## Video 37 - Sessions 101

## Video 38 - Register a New User
