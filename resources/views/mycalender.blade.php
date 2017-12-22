@extends('layouts.app')

    <meta charset="UTF-8">
    <title>Calendrier</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">

@section('content')

<link rel="stylesheet" type="text/css" href="{{asset('css/calendar.css')}}">

    <div class="container">

        <div class="calendar">

            <header>

                <h2>Décembre</h2>

                <a class="btn-prev fontawesome-angle-left" href="#"></a>
                <a class="btn-next fontawesome-angle-right" href="#"></a>

            </header>

            <table>

                <thead>

                    <tr>

                        <td>Mo</td>
                        <td>Tu</td>
                        <td>We</td>
                        <td>Th</td>
                        <td>Fr</td>
                        <td>Sa</td>
                        <td>Su</td>

                    </tr>

                </thead>

                <tbody>

                    <tr>
                        <td class="prev-month">27</td>
                        <td class="prev-month">28</td>
                        <td class="prev-month">29</td>
                        <td class="prev-month">30</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>5</td>
                        <td>6</td>
                        <td>7</td>
                        <td>8</td>
                        <td>9</td>
                        <td>10</td>
                    </tr>
                    <tr>
                        <td>11</td>
                        <td>12</td>
                        <td>13</td>
                        <td>15</td>
                        <td>15</td>
                        <td>16</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>18</td>
                        <td>19</td>
                        <td>20</td>
                        <td>21</td>
                        <td class="current-day event"><a href="https://lesjoiesducode.fr/post/168816058396/quand-je-suis-un-tuto-foireux-à-la-lettre">22</a></td>
                        <td class="event"><a href="https://lesjoiesducode.fr/post/168787896627/quand-je-teste-le-dernier-framework-à-la-mode">23</a></td>
                        <td>24</td>
                    </tr>

                    <tr>
                        <td class="event"><a href="https://lesjoiesducode.fr/post/168785914933/quand-le-client-me-sort-une-vanne-bien-pourrie">25</a></td>
                        <td>26</td>
                        <td>27</td>
                        <td>28</td>
                        <td>29</td>
                        <td>30</td>
                        <td>31</td>
                    </tr>
                    <tr>
                        <td class="next-month">1</td>
                        <td class="next-month">2</td>
                        <td class="next-month">3</td>
                        <td class="next-month">4</td>
                        <td class="next-month">5</td>
                        <td class="next-month">6</td>
                        <td class="next-month">7</td>
                    </tr>

                </tbody>

            </table>

        </div> <!-- end calendar -->

    </div> <!-- end container -->

@endsection
