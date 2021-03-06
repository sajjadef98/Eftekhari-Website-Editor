<!DOCTYPE html>
<html lang="fa" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Eftekhari Website Editor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/theme/ambiance.min.css" integrity="sha512-wVrMpCao81zIdzAM+fYyuF6BoUXjDO8le2mQXl4iVezdDSgZOCFtpm/AL3LZn9dqc3e4CloZfiZxhTp5UNpWIw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/htmlmixed/htmlmixed.min.js" integrity="sha512-HN6cn6mIWeFJFwRN9yetDAMSh+AK9myHF1X9GlSlKmThaat65342Yw8wL7ITuaJnPioG0SYG09gy0qd5+s777w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/xml/xml.min.js" integrity="sha512-LarNmzVokUmcA7aUDtqZ6oTS+YXmUKzpGdm8DxC46A6AHu+PQiYCUlwEGWidjVYMo/QXZMFMIadZtrkfApYp/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/javascript/javascript.min.js" integrity="sha512-I6CdJdruzGtvDyvdO4YsiAq+pkWf2efgd1ZUSK2FnM/u2VuRASPC7GowWQrWyjxCZn6CT89s3ddGI+be0Ak9Fg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/css/css.min.js" integrity="sha512-oikhYLgIKf0zWtVTOXh101BWoSacgv4UTJHQOHU+iUQ1Dol3Xjz/o9Jh0U33MPoT/d4aQruvjNvcYxvkTQd0nA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/clike/clike.min.js" integrity="sha512-l8ZIWnQ3XHPRG3MQ8+hT1OffRSTrFwrph1j1oc1Fzc9UKVGef5XN9fdO0vm3nW0PRgQ9LJgck6ciG59m69rvfg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/mode/php/php.min.js" integrity="sha512-jZGz5n9AVTuQGhKTL0QzOm6bxxIQjaSbins+vD3OIdI7mtnmYE6h/L+UBGIp/SssLggbkxRzp9XkQNA4AyjFBw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/hint/show-hint.min.css" integrity="sha512-OmcLQEy8iGiD7PSm85s06dnR7G7C9C0VqahIPAj/KHk5RpOCmnC6R2ob1oK4/uwYhWa9BF1GC6tzxsC8TIx7Jg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/hint/show-hint.min.js" integrity="sha512-Rx36KK4rJrsLJhzLBmhWGdQJKoog81hHm+0qBZD6IEF2+D+CqWiuiXhtAXoxJzucl4mx8zTYCGKX6zgq6+yLGQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/hint/css-hint.min.js" integrity="sha512-1BD3lo262s+DtDFoeD8+ssEL1zVJU8SHWWMtUyxfLqMV/jQDEnyQlS/CL3mD1kkLSv2hhYq1sdcA/zAPDz4JVA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/hint/html-hint.min.js" integrity="sha512-oxBKDzXElkyh3mQC/bKA/se1Stg1Q6fm7jz7PPY2kL01jRHQ64IwjpZVsuZojcaj5g8eKSMY9UJamtB1QR7Dmw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/hint/javascript-hint.min.js" integrity="sha512-omIxBxPdObb7b3giwJtPBiB86Mey/ds7qyKFcRiaLQgDxoSR+UgCYEFO7jRZzPOCZAICabGCraEhOSa71U1zFA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/selection/active-line.min.js" integrity="sha512-0sDhEPgX5DsfNcL5ty4kP6tR8H2vPkn40GwA0RYTshkbksURAlsRVnG4ECPPBQh7ZYU6S3rGvp5uhlGQUNrcmA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.5/addon/edit/matchbrackets.min.js" integrity="sha512-GSYCbN/le5gNmfAWVEjg1tKnOH7ilK6xCLgA7c48IReoIR2g2vldxTM6kZlN6o3VtWIe6fHu/qhwxIt11J8EBA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        .CodeMirror {
            border: 1px solid #eee;
            height: auto;
        }

        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            display: none;
        }
        .alert {
            padding: 20px;
            background-color:#157347;
            color: white;
        }
        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }
        .closebtn:hover {
            color: black;
        }
        .sa-lime {
           color:#157347 ;
        }
        .sa-rtl {
            direction: rtl;
            text-align: right;
        }
        .sa-cen {
            direction: rtl;
            text-align: center;
        }
        .sa-ltr {
            direction: ltr;
            text-align: left;
        }
    </style>
    <link rel="icon" href="https://manbaenab.ir/favicon.ico">
</head>

<body style="background-color:#000000 !important;">
    <div class="container ">
        <div class="container sa_ltr ">
            <br>
            <br>
            <?php
             $chek_dir[1]    =   __DIR__ . '/';
          //  $chek_dir[2]  =   __DIR__ . '/../../app/Http/Controllers';
          //  $chek_dir[3]  =   __DIR__ . '/../../public/';
            $clearname = $chek_dir; // or part of path like  'C:\laragon\www'  
            function getDirContents($dir, &$results = array())
            {
                $files = scandir($dir);
                foreach ($files as $key => $value) {
                    $path = realpath($dir . DIRECTORY_SEPARATOR . $value);
                    if (!is_dir($path)) {
                        $results[] = $path;
                    } else if ($value != "." && $value != "..") {
                        getDirContents($path, $results);
                        //   $results[] = $path;
                    }
                }
                return $results;
            }
            if (isset($_POST['submit'])) {
                $file_contents = str_replace("\nH", ",H", $_POST['content']);
                file_put_contents($_GET['ed'], $_POST['content']);
            ?>
                <div class="alert sa-rtl">
                    <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong> ?????????? ???? ! </strong> <strong>???????????? ???? ???????????? ?????????? ????</strong>
                </div>
            <?php  }
            $url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $url = substr($url, 0, strpos($url, "?"));
            $akk =[] ;
            foreach($chek_dir as $one_dir){
                $akk = array_merge($akk, getDirContents($one_dir));
            }
            
            foreach ($akk as $file) {
                echo '<a href="' . $url . '?ed=' . $file . '"  >' . str_replace($clearname, '', $file) . '</a><br>';
            }
            if (!empty($_GET['ed'])) {
                $path_to_file = $_GET['ed'];
                $file_contents = file_get_contents($path_to_file);
                echo '<h4 class="sa-lime sa-ltr">' . $_GET['ed'] . '+++  ?????? ???? ?????? ???????? ???????? ?????? ??????????  +++' . '</h4>';
            } else {
                $file_contents = '';
            }
            ?>
            <script>
                $(document).ready(function() {
                    var codeEditorElement = $(".codemirror-textarea")[0];
                    var editor = CodeMirror.fromTextArea(codeEditorElement, {
                        mode: "application/x-httpd-php",
                        extraKeys: {
                            "Ctrl-Space": "autocomplete"
                        },
                        lineNumbers: true,
                        matchBrackets: true,
                        theme: "ambiance",
                        lineWiseCopyCut: true,
                        undoDepth: 200,
                    });
                    var complexArray = <?php echo json_encode($file_contents); ?>;
                    editor.setValue(complexArray);
                });
                $(document).ready(function() {
                    $(window).scroll(function() {
                        if ($(this).scrollTop() > 50) {
                            $('#back-to-top').fadeIn();
                        } else {
                            $('#back-to-top').fadeOut();
                        }
                    });
                    // scroll body to 0px on click
                    $('#back-to-top').click(function() {
                        $('body,html').animate({
                            scrollTop: 0
                        }, 400);
                        return false;
                    });
                });
            </script>
            <div class="col-lg-12" data-aos="fade-down" data-aos-delay="5000">
                <br>
                
                <form action="<?= $url ?><?php if (!empty($_GET['ed'])) {
                                            echo '?ed=' . $_GET['ed'];
                                        } ?>" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="<? //=csrf_token()?>" />
                     <div class="col-12 sa_rtl row">
                    <h4 id="tittle-c"> Eftekhari Website Editor
                        <a href="https://idpay.ir/sajjadeftekhari" target="_blank"><input class="btn btn-success" type="button" value="donate"></a>
                        <input class="btn btn-primary" type="submit" name="submit" value="?????????? ????????????">
                    </h4>
                </div> <br>
                 
                    <div class="row">
                        <textarea class=" sa-ltr codemirror-textarea" name="content" id="code-editor"><?php if (!empty($file_contents)) {
                                                                                                            echo trim($file_contents);
                                                                                                        } else {
                                                                                                            echo '???? ???????? ???? ???????????? ????????';
                                                                                                        } ?></textarea>
                    </div>
                    <div class="row">

                        <div class="col-12 col-sm-4 mt-2"> <input class="btn btn-primary" type="submit" name="submit" value="?????????? ????????????"></div>
                    </div>
                </form>
            </div>
            <br><br><br>
        </div>
    </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-lg back-to-top" style="border-color: purple" role="button"><svg xmlns="http://www.w3.org/2000/svg" color="purple" width="32" height="32" fill="currentColor" class="bi bi-filetype-php" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.295.185.522Zm4.48 2.666V11.85h-.79v1.626H4.153V11.85h-.79v3.999h.79v-1.714h1.682v1.714h.79Zm.703-3.999h1.6c.288 0 .533.06.732.179.2.117.354.276.46.477.105.201.158.427.158.677 0 .25-.054.476-.161.677-.106.199-.26.357-.463.474a1.452 1.452 0 0 1-.733.173H8.12v1.342h-.791V11.85Zm2.06 1.714a.795.795 0 0 0 .084-.381c0-.227-.061-.4-.184-.521-.123-.122-.294-.182-.513-.182h-.66v1.406h.66a.794.794 0 0 0 .375-.082.574.574 0 0 0 .237-.24Z" />
        </svg></a>
    <footer class="footer ">
        <p class="clearfix mb-0 sa-cen">
            <span class=" d-block d-md-inline-block mt-25">?????????? ???????? ?? ???????? <a class="ml-25" href="https://www.instagram.com/phpdevelop.er/" target="_blank"> Sajjad Eftekhari</a><span class="d-none d-sm-inline-block">&nbsp;&nbsp;&nbsp; <?= date('Y') ?><span style="font-size: 18pt"> ?? </span> </span></span>
    </footer>
</body>

</html>