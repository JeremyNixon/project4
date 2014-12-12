@extends('/cs109/base')
<title>Analysis</title>
@section('body')
    <div class="title">Historical Frequencies</div>
    <div class="topic-information">
        From our historical analysis, we inferred that the spread of mean frequencies among the most popular songs is roughly the same every year. However, we discovered that most years are severely skewed in one direction. This demonstrates that while in a given set of popular songs you are likely to find hits at both edges of the distribution, the general means may tend towards one edge. One possible explanation for this is that tastes vary from year to year and that is represented in the frequencies of the song. Another possibility is that because a given album can have many similar top hits, that there is unaccounted-for correlation about the top 25 songs for a given year-i.e. they are from the same artists. As a consequence, these songs are likely to have similar frequency statistics and may explain the change from one year to another.
    </div>
@stop