@extends('/cs109/base')
<title>Analysis</title>
@section('body')
    <div class="title">Genre Classification</div>
    <div class="topic-information">
        The genre classifier that we built was not great, but we were able to see that the artist has no impact. This was a surprising result, since we would have assumed that the artist would be a primary determinant of the genre since most artists tend to produce one genre only (Taylor Swift, whose music maintained popularity even as it shifted genres from country to pop, is one exception to this rule). Overall, the F1 scores that we generated were not high enough to have a good degree of confidence in our model.
    </div>
@stop