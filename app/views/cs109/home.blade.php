@extends('/cs109/base')
<title>Popular!</title>
@section('body')
<div class="home-container">
	<div class="home-title">
		<p>We all pine to be Popular!</p>
	</div>
	<div class="home-text1">What factors determine the attraction of a song?</div><br>
	<div class="home-text1">Can songs be sorted into genres based on their frequency distribution?</div>
	</div>

	<div class="title">Title: Area of analysis 1</div>
	<div class="home-text2">
	{{--The takeaways for the project can be grouped in the aforementioned categories.--}}
	{{--From our historical analysis, we inferred that the spread of mean frequencies among the most popular songs is roughly the same every year.--}}
	</div>
	<img class="inline1" src="{{ URL::asset('/inline1.png') }}">

	<div class="text1">
	One to three sentences posing out question, method of analysis, and our conclusion. <br>More information can be found here: <a style="color: #000;" href="/cs109/topic1">Topic 1</a>

	</div>

<div class="title">Title: Area of analysis 2</div>

	<img class="inline2" src="{{ URL::asset('/inline2.png') }}">

	<div class="text2">
		One to three sentences posing out question, method of analysis, and our conclusion.<br>More information can be found here: <a href="/cs109/topic2">Topic 2</a>

	</div>
<div class="title">Title: Area of analysis 3</div>

	<img class="inline3" src="{{ URL::asset('/inline3.png') }}">

	<div class="text3">
		One to three sentences posing out question, method of analysis, and our conclusion.<br>More information can be found here: <a href="/cs109/topic3">Topic 3</a>
	</div>
</div>
<div class="title">Conclusions</div>

@stop