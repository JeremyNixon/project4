@extends('/cs109/base')
<title>Analysis</title>
@section('body')
    <div class="title">Popular v. Classical</div>
    <div class="topic-information">
        From our classical/popular classifier, we learned that it is very easy to express the differences between classical and popular music. Our model was able to very quickly identify the differences between the two and quickly approached an F1 score of 1 with no variation.
        For the F1 score, the harmonic mean of recall and precision, to be 1, we can infer that both recall and precision are 1-indicating that we correctly guess every positive without have erroneous guesses. Our model is thus, essentially, perfect. A possible reason for this is that the two datasets were very different because classical and popular music comes from very different instruments. As a result, a lot of the frequency metrics that we end up looking at will be significantly different between the two and, consequently, it will be very easier to differentiate between the two.    </div>
@stop