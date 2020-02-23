<ul class="list-unstyled">
    @foreach ($tasks as $task)
      	 <div>
            {!! link_to_route('tasks.show', $task->user->name, ['id' => $task->user->id]) !!} <span class="text-muted">posted at {{ $task->created_at }}</span>
         </div>
          <div>
             <p class="mb-0">{!! nl2br(e($task->content)) !!}</p>
          </div>
    @endforeach
</ul>
{{ $tasks->links('pagination::bootstrap-4') }}