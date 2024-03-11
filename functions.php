<?php

function url(string $path): string
{
    $path = trim($path, '/');
    return APP_URL . $path;
}
function showError(string $key): void
{
    if (Session::exists('validation_errors')) {
        $errors = Session::get('validation_errors');
        if (array_key_exists($key, $errors)) {
            $html = '<div style="color: red;">';
            foreach ($errors as $keyError => $error) {
                if ($keyError === $key) {
                    $html .= "- $error; <br>";
                }
            }
            $html .= '</div>';
            echo $html;

            Session::removeError($key);
        }
    }
}

function showMessage(string $key): void
{
    if (Session::exists($key)) {
        $message = Session::get($key);
        echo "<div style='color: green'>$message</div>";
        Session::remove($key);
    }
}

function view(string $path, array $variables = []): bool
{
    $view = new View();
    return $view->render($path, $variables);
}
function printer(string $text): void
{
    echo strip_tags($text);
}
function percentCalculate(int|float $number, int $percent): float|int
{
    //todo validation
    return $number * ($percent / 100);
}
function showPost(Post $post)
{
    echo $post->getInfo();
}

//function showPostBad($post)
//{
//    $title = $post->getTitle();
//    $content = $post->getContent();
//
//    if ($post instanceof Blog) {
//        echo "<h3>$title</h3><p>$content</p>";
//    } elseif ($post instanceof News) {
//        echo "<p><i>$title:</i>$content</p>";
//    }
//}
/**
 * @param string $fileName
 * @return Generator
 */
function fileLineGenerator(string $fileName): Generator
{
    $file = fopen($fileName, 'r');
    while(($line = fgets($file)) !== false) {
        yield $line;
    }
    fclose($file);
}

//function Logger(string $message, string $type = 'action', string $file = LOG_FILE): bool
//{
//    $filePath = LOG_DIR . $file;
//    $date = date('d-m-Y H:i:s');
//    $message = "[$type][$date][$message]" . PHP_EOL;
//
//    $file = fopen($filePath, 'a+');
//    $result = fwrite($file, $message);
//    fclose($file);
//
//    return (bool)$result;
//}

function includeTemplate(string $filePath, array $variables = []): string
{
    if ($variables) {
        extract($variables);
    }

    ob_start();

    include $filePath;

    return ob_get_clean();
}


