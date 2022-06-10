

Eftekhari Website Editor developed by Sajjad Eftekhari
Powerful free and single -page editor usable on all sites developed with Sajjad
***
Set the  $chek_dir[1] in line 81 and run the websiteedite.php
```php
  $chek_dir[1]     =   __DIR__ . '/';
 //  $chek_dir[2]  =   __DIR__ . '/../../app/Http/Controllers';
 //  $chek_dir[3]  =   __DIR__ . '/../../public/';
```
* In Larvel you should
* 1 Move the websiteedite.php to the views
* and  change the 

* 2 `<input type="hidden" name="_token" value="<? //=csrf_token() ?>" />`
*  to the 
* `<input type="hidden" name="_token" value="<?=csrf_token() ?>" /> `
* 3 and add get and post or any request in routes like this 

```php
Route::any('/websiteedite', function () {
    return view('websiteedite');
});
```




![Eftekhari_Website_Editor1.jpg](https://s25.picofile.com/file/8450785042/Eftekhari_Website_Editor1.jpg)
![Eftekhari_Website_Editor2.jpg](https://s24.picofile.com/file/8450785092/Eftekhari_Website_Editor2.jpg)
