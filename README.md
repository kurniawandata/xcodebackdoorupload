# xcodebackdoorupload

X-code Backdoor Upload for Ethical Hacking
-----------------------------------------------

![alt text](http://xcode.or.id/04_small-logo.png)


Penggunaan : 

Script backdoor upload untuk disisipkan pada file php yang ada di website target 

Contoh :

http://websitetarget.com/index.php?inject


Cara kerja program setelah variabel inject dijalankan pada file php yang disisipi backdoor

1. Pengecekan pada nama variabel cekfile apakah ada isinya atau belum
2. Jika nama variabel cekfile belum ada isinya maka masuk ke form upload yang dibuat dengan "single quote echo" 
3. Hacker melakukan upload PHP Shell pada form form upload yang dibuat dengan "single quote echo" dan klik upload maka secara otomatis nama variabel cekfile terisi 
4. Pengecekan kembali apakah nama variabel cekfile sudah ada isinya
5. Jika sudah ada isinya maka file diupload

Informasi
---------
Saya tidak bertanggung jawab segala akibat yang disebabkan oleh script ini karena script ini dibuat untuk tujuan ethical hacking

Progammer
------- 

Progammer : Kurniawan - xcode.or.id


Licensi
------- 

GNU General Public License 



Donasi :
--------

Jika ingin donasi untuk Kurniawan 

![alt text](http://xcodeserver.my.id/gofood.png)

![alt text](http://xcodeserver.my.id/gopay.png)
