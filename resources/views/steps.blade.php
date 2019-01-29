@extends('layouts.template.template')

@section('title', 'TESTE')

@section('css')
@endsection

@section('content')
  <div id="example-vertical">
    <h3>Keyboard</h3>
    <section>
        <p>Try the keyboard navigation by clicking arrow left or right!</p>
    </section>
    <h3>Effects</h3>
    <section>
        <p>Wonderful transition effects.</p>
    </section>
    <h3>Pager</h3>
    <section>
        <p>The next and previous buttons help you to navigate through your content.</p>
    </section>
  </div>
@endsection

@section('js')
  <script>
    $("#wizard").steps({
      // Disables the finish button (required if pagination is enabled)
      enableFinishButton: false, 
      // Disables the next and previous buttons (optional)
      enablePagination: false, 
      // Enables all steps from the begining
      enableAllSteps: true, 
      // Removes the number from the title
      titleTemplate: "#title#" 
    });

    $("#example-vertical").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      stepsOrientation: "vertical"
    });
  </script>
@endsection