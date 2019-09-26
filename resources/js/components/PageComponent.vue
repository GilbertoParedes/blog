<template>
    <section class="task-panel tasks-widget">
        <div class="panel-heading">
        <div class="pull-left">
            <h5><i class="fa fa-tasks"></i> Páginas - Agregar Página <a href=""><button class="btn btn-success btn-xs"><i class=" fa fa-plus"></i></button></a></h5>
        </div>
        <br>
        </div>
        <div class="panel-body">
        <div class="task-content">
            <ul class="task-list">
            <!-- @foreach($pages as $page) -->
            <li>
                <div class="task-checkbox">
                <input type="checkbox" class="list-child" value="" />
                </div>
                <div class="task-title">
                <span class="task-title-sp"></span> <!-- nombre de la página -->
                <!-- <span class="badge bg-theme">Done</span> -->
                <div class="pull-right hidden-phone">
                    <button class="btn btn-success btn-xs"><i class=" fa fa-eye"></i></button>
                    <a href=""><button class="btn btn-primary btn-xs"><i class="fa fa-edit"></i></button></a>
                
                    <a href=""><button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
                    
                </div>
                </div>
            </li>
            <!-- @endforeach -->
            </ul>
        </div>
        <div class=" add-task-row">
            <a class="btn btn-success btn-sm pull-left" href="todo_list.html#">Add New Tasks</a>
            <a class="btn btn-default btn-sm pull-right" href="todo_list.html#">See All Tasks</a>
        </div>
        </div>
    </section>
</template>

<script>
export default {
    
}
</script>