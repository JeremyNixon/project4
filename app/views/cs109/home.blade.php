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

	<div class="title">Varying Music Tastes over 10 Years</div>
	<div class="home-text2">
	{{--The takeaways for the project can be grouped in the aforementioned categories.--}}
	{{--From our historical analysis, we inferbet
	ed that the spread of mean frequencies among the most popular songs is roughly the same every year.--}}
	</div>
	<img class="inline1" src="{{ URL::asset('/inline1.png') }}">

	<div class="text1">
		Our analysis demonstrated consistency in the frequencies of popular songs within but not across different years.
	</div>

<div class="title">Popular v. Classical Songs</div>

	<img class="inline2" src="{{ URL::asset('/inline2.png') }}">

	<div class="text2">
		Vast differences in the composition of popular and classical songs helped us create a model that perfectly sorted classical and popular songs.
	</div>
<div class="title">Genre Classification</div>

	<img class="inline3" src="{{ URL::asset('/inline4.png') }}">

	<div class="text3">
		Our analysis demonstrated significant aural similarities among different genres and illustrated that a song's artist is not predictive of its genre.	</div>

<div class="title">Arbitrary Popularity</div>

<img class="inline2" src="{{ URL::asset('/inline5.png') }}">

<div class="text2">
	After running tests on pairs of popular and unpopular songs, we discovered no measurable difference in the aural content of the music.
</div>
</div>

@stop