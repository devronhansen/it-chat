@extends('layouts.layout')

@section('style')
@endsection

@section('content')
    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>IT-Chat</h1>
                        <h3>"Ein Chat sie zu knechten..."</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li>
                                <a href="chat" class="btn btn-default btn-lg"><i
                                            class="fa fa-weixin fa-fw"></i> <span
                                            class="network-name">Zum Chat</span></a>
                            </li>

                            {{--<li>
                                <a href="https://twitter.com/devronhansen" class="btn btn-default btn-lg"><i
                                            class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                            </li>--}}
                            {{-- <li>
                                 <a href="https://github.com/devronhansen" class="btn btn-default btn-lg"><i
                                             class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                             </li>
                             <li>
                                 <a href="#" class="btn btn-default btn-lg"><i class="fa fa-steam-square fa-fw"></i> <span
                                             class="network-name">Steam</span></a>
                             </li>--}}
                        </ul>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <a name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Grenzenlose Kommunikation:<br>Auf allen Plattformen</h2>
                    <p class="lead">Der IT-Chat bietet der It die Möglichkeit zur barrierefreien Kommunikation. Egal ob
                        du
                        auf einem Außeneinsatz, in der IT oder zuhause bist, mit dem It Chat kannst du Fiete immer
                        fragen
                        wie nochmal das XY Passwort lautet.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/it-sectiona.jpg" alt="CommunicationPicture">
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">

        <div class="container">

            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Mal wieder krank?<br>...oder faul?</h2>
                    <p class="lead">Oder bis spät abends gezockt? Mit dem It-Chat kannst du immer deinen Ausbilder
                        erreichen
                        um dich krank zu melden!</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/it-lazy.jpg" alt="it lazy picture">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
@endsection


@section('script')
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
@endsection

