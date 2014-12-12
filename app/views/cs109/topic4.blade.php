@extends('/cs109/base')
<title>Analysis</title>
@section('body')
    <div class="title">Arbitrary Popularity</div>
    <div class="topic-information">
        Our popular/unpopular classifier did not have the same success as the previous one.

        By contrast, we found that using underlying frequency statistics did not help predict which songs would become popular for a given artist. None of the frequency characteristics that we considered - covariance, max, mean, median, standard deviation—were judged to be particularly predictive. This could be a product of popularity coming less from musical differences and more because of other factors (lyrics, momentum factors, etc.). On the other hand, it is possible that we simply did not have enough data and had we included more unpopular songs, we would have been able to draw a difference between the unpopular and popular sets. Another possibility is that popular musicians tend to necessarily have less variety in their music than one-hit wonders, whose single hit may differ significantly from its typical work.
    </div>
@stop