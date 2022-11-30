<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ToDo List JSON</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- MY STYLE -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <div class="ms_container">
        <!-- Vue Container -->
        <main id="app" class="container mt-5">
            <!-- TITLE -->
            <h1 class="text-center"> {{title}} </h1>

            <!-- LIST -->
            <section class="row my-5 justify-content-center">
                <ul class="list-group col-7">
                    <li class="list-group-item d-flex justify-content-between" v-for="(item, index) in toDo" :key="index">
                        <h5 :class="item.done ? 'ms_done' : ''" class="text-left" @click="toggleDone(index)"> {{item.text}} </h5>
                        <span class="text-right" @click="cancelItem(index)"> &cross; </span>
                    </li>
                </ul>
            </section>

            <!-- INPUT -->
            <section class=" ms_input">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Add new task" aria-label="Add new to do" v-model="newTask">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" @click="createNewTask">Add</button>
                    </div>
                </div>
            </section>

        </main>
    </div>

    <script src="js/script.js"></script>
</body>

</html>