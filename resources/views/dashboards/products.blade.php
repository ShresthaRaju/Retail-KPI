@extends('layouts.dashboard')

@section('title','Products')

@section('dashboard_content')
<div id="vizContainer" style="width:800px; height:700px;"></div>
@endsection

@section('custom_scripts')
    <script type="text/javascript" src="https://public.tableau.com/javascripts/api/tableau-2.min.js"></script>
    <script type="text/javascript">
        function initViz() {
            var containerDiv = document.getElementById("vizContainer"),
                url = "https://public.tableau.com/shared/B5PY5XPB4?:display_count=y&:origin=viz_share_link",
                options = {
                    hideTabs: true,
                    onFirstInteractive: function () {
                        console.log("Run this code when the viz has finished loading.");
                    }
                };

            var viz = new tableau.Viz(containerDiv, url, options);
        }

  $(document).ready(function(){
      initViz();
  })  
    </script>
@endsection
