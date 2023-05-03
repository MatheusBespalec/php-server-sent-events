<?php

header("Content-Type: text/event-stream");
date_default_timezone_set("America/Sao_Paulo");

$counter = 0;
while (true) {
    echo "event: now\n";
    echo "data: " . date("d/m/Y H:i:s");
    echo "\n\n";

    echo "event: counter\n";
    echo "data: " . ++$counter;
    echo "\n\n";

    @ob_end_flush();

    if (connection_aborted()) break;

    sleep(1);
}