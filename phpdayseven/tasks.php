<?php

const FILE_PATH = "tasks.json";

function load_tasks(): array {
    if(!file_exists(FILE_PATH) || filesize(FILE_PATH) === 0 ){
        return[];
    }
    $json = file_get_contents(FILE_PATH);
    $data = json_decode($json, true);
    return is_array($data) ? $data :[];
}

function save_tasks(array $tasks): void{
    $json = json_encode($tasks, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    file_put_contents(FILE_PATH, $json);
}

function next_id(array $tasks): int {
    $max = 0;
    foreach ($tasks as $task) {
        if ($task['id'] > $max) {
            $max = $task['id'];
        }
    }
    return $max + 1;
}

function list_task(array $tasks): void{
    if (empty($tasks)){
        echo "Список задань порожній.\n";
        return;
    }
}

function add_task(string $text): void {
    $tasks = load_tasks();
    $id = next_id($tasks);

    $tasks[] = [
        "id" => $id,
        "text" => $text,
        "done" => false
    ];

    save_tasks($tasks);
    echo "Завдання додано (ID={$id})\n";
}

function done_task(int $id): void {
    $tasks = load_tasks();
    $found = false;

    foreach ($tasks as &$task) {
        if ($task['id'] === $id) {
            $task['done'] = true;
            $found = true;
            break;
        }
    }

    if ($found) {
        save_tasks($tasks);
        echo "Завдання [{$id}] позначено як виконане.\n";
    } else {
        echo "Завдання з ID={$id} не знайдено.\n";}
}
    function delete_task(int $id): void {
    $tasks = load_tasks();
    $new_tasks = [];
    $found = false;

    foreach ($tasks as $task) {
        if ($task['id'] === $id) {
            $found = true;
            continue;
        }
        $new_tasks[] = $task;
    }

    if ($found) {
        save_tasks($new_tasks);
        echo "Завдання [{$id}] видалено.\n";
    } else {
        echo "Завдання з ID={$id} не знайдено.\n";}
}
    function show_help(): void {
    echo "Доступні команди:\n";
    echo "  php tasks.php add \"Текст\"   - додати нове завдання\n";
    echo "  php tasks.php list            - показати список завдань\n";
    echo "  php tasks.php done ID         - позначити завдання як виконане\n";
    echo "  php tasks.php delete ID       - видалити завдання\n";
 }
    $command = $argv[1] ?? null;

switch ($command) {
    case "add":
        $text = $argv[2] ?? null;
        if ($text) {
            add_task($text);
        } else {
            echo "Помилка: вкажіть текст завдання.\n";
        }
        break;

    case "list":
        $tasks = load_tasks();
        list_tasks($tasks);
        break;

    case "done":
        $id = isset($argv[2]) ? (int)$argv[2] : 0;
        if ($id > 0) {
            done_task($id);
        } else {
            echo "Помилка: вкажіть ID завдання.\n";
        }
        break;

    case "delete":
        $id = isset($argv[2]) ? (int)$argv[2] : 0;
        if ($id > 0) {
            delete_task($id);
        } else {
            echo "Помилка: вкажіть ID завдання.\n";
        }
        break;

    default:
        show_help();
}