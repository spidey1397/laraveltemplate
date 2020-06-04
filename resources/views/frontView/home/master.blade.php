<!DOCTYPE html>
<html lang="en">

<head>
@include('frontView.home.layouts')
</head>

<body>

@include('frontView.home.head')

@include('frontView.home.topsection')

<main id="main">

@include('frontView.home.section.about')
@include('frontView.home.section.services')
@include('frontView.home.section.whyus')
@include('frontView.home.section.calltoaction')
@include('frontView.home.section.features')
@include('frontView.home.section.portfolio')
@include('frontView.home.section.testimonials')
@include('frontView.home.section.team')
@include('frontView.home.section.clients')
@include('frontView.home.section.pricing')
@include('frontView.home.section.faq')

</main><!-- End #main -->

  @include('frontView.home.footer') 

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

 @include('frontView.home.scripts')

</body>

</html>