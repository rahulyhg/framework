<div class="container">
    <h1> Tasks</h1>

    <div class="row">
        <div class="col-md-8">
            @forelse($tasks as $task)
            <div class="card-box">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="text-dark  header-title m-t-0"> {!! $task['name'] !!} </h4>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ trans_url('task') }}/{!! $task->getPublicKey() !!}" class="btn btn-default pull-right"> {{ trans('app.details')  }}</a>
                    </div>
                </div>
                <hr/>

                <div class="row">
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="parent_id">
                    {!! trans('task::task.label.parent_id') !!}
                </label><br />
                    {!! $task['parent_id'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="start">
                    {!! trans('task::task.label.start') !!}
                </label><br />
                    {!! $task['start'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="end">
                    {!! trans('task::task.label.end') !!}
                </label><br />
                    {!! $task['end'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="category">
                    {!! trans('task::task.label.category') !!}
                </label><br />
                    {!! $task['category'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="task">
                    {!! trans('task::task.label.task') !!}
                </label><br />
                    {!! $task['task'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="time_required">
                    {!! trans('task::task.label.time_required') !!}
                </label><br />
                    {!! $task['time_required'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="time_taken">
                    {!! trans('task::task.label.time_taken') !!}
                </label><br />
                    {!! $task['time_taken'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="priority">
                    {!! trans('task::task.label.priority') !!}
                </label><br />
                    {!! $task['priority'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="status">
                    {!! trans('task::task.label.status') !!}
                </label><br />
                    {!! $task['status'] !!}
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class"form-group">
                <label for="created_by">
                    {!! trans('task::task.label.created_by') !!}
                </label><br />
                    {!! $task['created_by'] !!}
            </div>
        </div>
    </div>
            </div>
            @empty
            <div class="card-box">
                <h4 class="text-dark  header-title m-t-0">No modules</h4>
                <p class="text-muted m-b-25 font-13">
                    Your search for <b>'{{Request::get('search')}}'</b> returned empty result.
                </p>
            </div>
            @endif
            {{$tasks->output()}}
        </div>
        <div class="col-md-4">
            @include('task::public.task.aside')
        </div>
    </div>
</div>