@extends('main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mt-5 border-bottom">
        <h3>Kelola Jadwal Lab</h3>
    </div>


    {{-- CALENDAR SECTION --}}
    {{-- <div class="main-content" style="min-height: 569px;">
        <section class="section">

            <div class="section-body">
            

                <div class="row">
                    <div class="col-15">
                        <div class="card">
                            <div class="card-header">
                                <h4>Calendar</h4>
                            </div>
                            <div class="card-body">
                                <div class="fc-overflow">
                                    <div id="myEvent" class="fc fc-unthemed fc-ltr">
                                        <div class="fc-toolbar fc-header-toolbar">
                                            <div class="fc-left">
                                                <div class="fc-button-group"><button type="button"
                                                        class="fc-prev-button fc-button fc-state-default fc-corner-left"><span
                                                            class="fc-icon fc-icon-left-single-arrow"></span></button><button
                                                        type="button"
                                                        class="fc-next-button fc-button fc-state-default fc-corner-right"><span
                                                            class="fc-icon fc-icon-right-single-arrow"></span></button>
                                                </div><button type="button"
                                                    class="fc-today-button fc-button fc-state-default fc-corner-left fc-corner-right fc-state-disabled"
                                                    disabled="">today</button>
                                            </div>
                                            <div class="fc-right">
                                                <div class="fc-button-group"><button type="button"
                                                        class="fc-month-button fc-button fc-state-default fc-corner-left fc-state-active">month</button><button
                                                        type="button"
                                                        class="fc-agendaWeek-button fc-button fc-state-default">week</button><button
                                                        type="button"
                                                        class="fc-agendaDay-button fc-button fc-state-default">day</button><button
                                                        type="button"
                                                        class="fc-listWeek-button fc-button fc-state-default fc-corner-right">list</button>
                                                </div>
                                            </div>
                                            <div class="fc-center">
                                                <h2>September 2023</h2>
                                            </div>
                                            <div class="fc-clear"></div>
                                        </div>
                                        <div class="fc-view-container" style="">
                                            <div class="fc-view fc-month-view fc-basic-view" style="">
                                                <table class="">
                                                    <thead class="fc-head">
                                                        <tr>
                                                            <td class="fc-head-container fc-widget-header">
                                                                <div class="fc-row fc-widget-header">
                                                                    <table class="">
                                                                        <thead>
                                                                            <tr>
                                                                                <th
                                                                                    class="fc-day-header fc-widget-header fc-sun">
                                                                                    <span>Sun</span></th>
                                                                                <th
                                                                                    class="fc-day-header fc-widget-header fc-mon">
                                                                                    <span>Mon</span></th>
                                                                                <th
                                                                                    class="fc-day-header fc-widget-header fc-tue">
                                                                                    <span>Tue</span></th>
                                                                                <th
                                                                                    class="fc-day-header fc-widget-header fc-wed">
                                                                                    <span>Wed</span></th>
                                                                                <th
                                                                                    class="fc-day-header fc-widget-header fc-thu">
                                                                                    <span>Thu</span></th>
                                                                                <th
                                                                                    class="fc-day-header fc-widget-header fc-fri">
                                                                                    <span>Fri</span></th>
                                                                                <th
                                                                                    class="fc-day-header fc-widget-header fc-sat">
                                                                                    <span>Sat</span></th>
                                                                            </tr>
                                                                        </thead>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fc-body">
                                                        <tr>
                                                            <td class="fc-widget-content">
                                                                <div class="fc-scroller fc-day-grid-container"
                                                                    style="overflow: hidden auto; height: auto;">
                                                                    <div class="fc-day-grid fc-unselectable">
                                                                        <div class="fc-row fc-week fc-widget-content"
                                                                            style="height: 115px;">
                                                                            <div class="fc-bg">
                                                                                <table class="">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-past"
                                                                                                data-date="2023-08-27"></td>
                                                                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-past"
                                                                                                data-date="2023-08-28"></td>
                                                                                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-past"
                                                                                                data-date="2023-08-29"></td>
                                                                                            <td class="fc-day fc-widget-content fc-wed fc-other-month fc-past"
                                                                                                data-date="2023-08-30"></td>
                                                                                            <td class="fc-day fc-widget-content fc-thu fc-other-month fc-past"
                                                                                                data-date="2023-08-31"></td>
                                                                                            <td class="fc-day fc-widget-content fc-fri fc-past"
                                                                                                data-date="2023-09-01"></td>
                                                                                            <td class="fc-day fc-widget-content fc-sat fc-past"
                                                                                                data-date="2023-09-02"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="fc-content-skeleton">
                                                                                <table>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="fc-day-top fc-sun fc-other-month fc-past"
                                                                                                data-date="2023-08-27"><span
                                                                                                    class="fc-day-number">27</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-mon fc-other-month fc-past"
                                                                                                data-date="2023-08-28"><span
                                                                                                    class="fc-day-number">28</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-tue fc-other-month fc-past"
                                                                                                data-date="2023-08-29"><span
                                                                                                    class="fc-day-number">29</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-wed fc-other-month fc-past"
                                                                                                data-date="2023-08-30"><span
                                                                                                    class="fc-day-number">30</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-thu fc-other-month fc-past"
                                                                                                data-date="2023-08-31">
                                                                                                <span
                                                                                                    class="fc-day-number">31</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-fri fc-past"
                                                                                                data-date="2023-09-01">
                                                                                                <span
                                                                                                    class="fc-day-number">1</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-sat fc-past"
                                                                                                data-date="2023-09-02">
                                                                                                <span
                                                                                                    class="fc-day-number">2</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="fc-row fc-week fc-widget-content"
                                                                            style="height: 115px;">
                                                                            <div class="fc-bg">
                                                                                <table class="">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="fc-day fc-widget-content fc-sun fc-past"
                                                                                                data-date="2023-09-03">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-mon fc-today "
                                                                                                data-date="2023-09-04">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                                                data-date="2023-09-05">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                                                data-date="2023-09-06">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                                                data-date="2023-09-07">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                                                data-date="2023-09-08">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-sat fc-future"
                                                                                                data-date="2023-09-09">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="fc-content-skeleton">
                                                                                <table>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="fc-day-top fc-sun fc-past"
                                                                                                data-date="2023-09-03">
                                                                                                <span
                                                                                                    class="fc-day-number">3</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-mon fc-today "
                                                                                                data-date="2023-09-04">
                                                                                                <span
                                                                                                    class="fc-day-number">4</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-tue fc-future"
                                                                                                data-date="2023-09-05">
                                                                                                <span
                                                                                                    class="fc-day-number">5</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-wed fc-future"
                                                                                                data-date="2023-09-06">
                                                                                                <span
                                                                                                    class="fc-day-number">6</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-thu fc-future"
                                                                                                data-date="2023-09-07">
                                                                                                <span
                                                                                                    class="fc-day-number">7</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-fri fc-future"
                                                                                                data-date="2023-09-08">
                                                                                                <span
                                                                                                    class="fc-day-number">8</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-sat fc-future"
                                                                                                data-date="2023-09-09">
                                                                                                <span
                                                                                                    class="fc-day-number">9</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="fc-row fc-week fc-widget-content"
                                                                            style="height: 115px;">
                                                                            <div class="fc-bg">
                                                                                <table class="">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="fc-day fc-widget-content fc-sun fc-future"
                                                                                                data-date="2023-09-10">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-mon fc-future"
                                                                                                data-date="2023-09-11">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                                                data-date="2023-09-12">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                                                data-date="2023-09-13">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                                                data-date="2023-09-14">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                                                data-date="2023-09-15">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-sat fc-future"
                                                                                                data-date="2023-09-16">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="fc-content-skeleton">
                                                                                <table>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="fc-day-top fc-sun fc-future"
                                                                                                data-date="2023-09-10">
                                                                                                <span
                                                                                                    class="fc-day-number">10</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-mon fc-future"
                                                                                                data-date="2023-09-11">
                                                                                                <span
                                                                                                    class="fc-day-number">11</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-tue fc-future"
                                                                                                data-date="2023-09-12">
                                                                                                <span
                                                                                                    class="fc-day-number">12</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-wed fc-future"
                                                                                                data-date="2023-09-13">
                                                                                                <span
                                                                                                    class="fc-day-number">13</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-thu fc-future"
                                                                                                data-date="2023-09-14">
                                                                                                <span
                                                                                                    class="fc-day-number">14</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-fri fc-future"
                                                                                                data-date="2023-09-15">
                                                                                                <span
                                                                                                    class="fc-day-number">15</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-sat fc-future"
                                                                                                data-date="2023-09-16">
                                                                                                <span
                                                                                                    class="fc-day-number">16</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="fc-row fc-week fc-widget-content"
                                                                            style="height: 115px;">
                                                                            <div class="fc-bg">
                                                                                <table class="">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="fc-day fc-widget-content fc-sun fc-future"
                                                                                                data-date="2023-09-17">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-mon fc-future"
                                                                                                data-date="2023-09-18">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                                                data-date="2023-09-19">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                                                data-date="2023-09-20">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                                                data-date="2023-09-21">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                                                data-date="2023-09-22">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-sat fc-future"
                                                                                                data-date="2023-09-23">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="fc-content-skeleton">
                                                                                <table>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="fc-day-top fc-sun fc-future"
                                                                                                data-date="2023-09-17">
                                                                                                <span
                                                                                                    class="fc-day-number">17</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-mon fc-future"
                                                                                                data-date="2023-09-18">
                                                                                                <span
                                                                                                    class="fc-day-number">18</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-tue fc-future"
                                                                                                data-date="2023-09-19">
                                                                                                <span
                                                                                                    class="fc-day-number">19</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-wed fc-future"
                                                                                                data-date="2023-09-20">
                                                                                                <span
                                                                                                    class="fc-day-number">20</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-thu fc-future"
                                                                                                data-date="2023-09-21">
                                                                                                <span
                                                                                                    class="fc-day-number">21</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-fri fc-future"
                                                                                                data-date="2023-09-22">
                                                                                                <span
                                                                                                    class="fc-day-number">22</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-sat fc-future"
                                                                                                data-date="2023-09-23">
                                                                                                <span
                                                                                                    class="fc-day-number">23</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="fc-row fc-week fc-widget-content"
                                                                            style="height: 115px;">
                                                                            <div class="fc-bg">
                                                                                <table class="">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="fc-day fc-widget-content fc-sun fc-future"
                                                                                                data-date="2023-09-24">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-mon fc-future"
                                                                                                data-date="2023-09-25">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-tue fc-future"
                                                                                                data-date="2023-09-26">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-wed fc-future"
                                                                                                data-date="2023-09-27">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-thu fc-future"
                                                                                                data-date="2023-09-28">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-fri fc-future"
                                                                                                data-date="2023-09-29">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-sat fc-future"
                                                                                                data-date="2023-09-30">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="fc-content-skeleton">
                                                                                <table>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="fc-day-top fc-sun fc-future"
                                                                                                data-date="2023-09-24">
                                                                                                <span
                                                                                                    class="fc-day-number">24</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-mon fc-future"
                                                                                                data-date="2023-09-25">
                                                                                                <span
                                                                                                    class="fc-day-number">25</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-tue fc-future"
                                                                                                data-date="2023-09-26">
                                                                                                <span
                                                                                                    class="fc-day-number">26</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-wed fc-future"
                                                                                                data-date="2023-09-27">
                                                                                                <span
                                                                                                    class="fc-day-number">27</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-thu fc-future"
                                                                                                data-date="2023-09-28">
                                                                                                <span
                                                                                                    class="fc-day-number">28</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-fri fc-future"
                                                                                                data-date="2023-09-29">
                                                                                                <span
                                                                                                    class="fc-day-number">29</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-sat fc-future"
                                                                                                data-date="2023-09-30">
                                                                                                <span
                                                                                                    class="fc-day-number">30</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                        <div class="fc-row fc-week fc-widget-content"
                                                                            style="height: 116px;">
                                                                            <div class="fc-bg">
                                                                                <table class="">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td class="fc-day fc-widget-content fc-sun fc-other-month fc-future"
                                                                                                data-date="2023-10-01">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-mon fc-other-month fc-future"
                                                                                                data-date="2023-10-02">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-tue fc-other-month fc-future"
                                                                                                data-date="2023-10-03">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-wed fc-other-month fc-future"
                                                                                                data-date="2023-10-04">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-thu fc-other-month fc-future"
                                                                                                data-date="2023-10-05">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-fri fc-other-month fc-future"
                                                                                                data-date="2023-10-06">
                                                                                            </td>
                                                                                            <td class="fc-day fc-widget-content fc-sat fc-other-month fc-future"
                                                                                                data-date="2023-10-07">
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                            <div class="fc-content-skeleton">
                                                                                <table>
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <td class="fc-day-top fc-sun fc-other-month fc-future"
                                                                                                data-date="2023-10-01">
                                                                                                <span
                                                                                                    class="fc-day-number">1</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-mon fc-other-month fc-future"
                                                                                                data-date="2023-10-02">
                                                                                                <span
                                                                                                    class="fc-day-number">2</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-tue fc-other-month fc-future"
                                                                                                data-date="2023-10-03">
                                                                                                <span
                                                                                                    class="fc-day-number">3</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-wed fc-other-month fc-future"
                                                                                                data-date="2023-10-04">
                                                                                                <span
                                                                                                    class="fc-day-number">4</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-thu fc-other-month fc-future"
                                                                                                data-date="2023-10-05">
                                                                                                <span
                                                                                                    class="fc-day-number">5</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-fri fc-other-month fc-future"
                                                                                                data-date="2023-10-06">
                                                                                                <span
                                                                                                    class="fc-day-number">6</span>
                                                                                            </td>
                                                                                            <td class="fc-day-top fc-sat fc-other-month fc-future"
                                                                                                data-date="2023-10-07">
                                                                                                <span
                                                                                                    class="fc-day-number">7</span>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                            <td></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div> --}}



    {{-- FORM SECTION --}}
    <div class="container py-4" id="page-container">
    <div class="row">
      <div class="col-md-9">
        <div id="calendar"></div>
      </div>
      <div class="col-md-3">
        <div class="cardt rounded-0 shadow">
          <div class="card-header bg-gradient bg-primary text-light">
            <h5 class="card-title text-center">Input Data</h5>
          </div>
          <div class="card-body">
            <div class="container-fluid">
              <form action="save_schedule.php" method="post" id="schedule-form">
                <input type="hidden" name="id" value="">
                <div class="form-group mb-2">
                  <label for="title" class="control-label">Nama</label>
                  <input type="text" class="form-control form-control-sm rounded-0" name="title"
                    id="title" required>
                </div>
                <div class="form-group mb-2">
                  <label for="title" class="control-label">Title</label>
                  <input type="text" class="form-control form-control-sm rounded-0" name="title"
                    id="title" required>
                </div>
                <div class="form-group mb-2">
                  <label for="description" class="control-label">Description</label>
                  <textarea rows="3" class="form-control form-control-sm rounded-0"
                    name="description" id="description" required></textarea>
                </div>
                <div class="form-group mb-2">
                  <label for="start_datetime" class="control-label">Start</label>
                  <input type="datetime-local" class="form-control form-control-sm rounded-0"
                    name="start_datetime" id="start_datetime" required>
                </div>
                <div class="form-group mb-2">
                  <label for="end_datetime" class="control-label">End</label>
                  <input type="datetime-local" class="form-control form-control-sm rounded-0"
                    name="end_datetime" id="end_datetime" required>
                </div>
              </form>
            </div>
          </div>
          <div class="card-footer">
            <div class="text-center">
              <button class="btn btn-primary btn-sm rounded-0" type="submit"
                form="schedule-form"><i class="fa fa-save"></i> Save</button>
              <button class="btn btn-default border btn-sm rounded-0" type="reset"
                form="schedule-form"><i class="fa fa-reset"></i> Cancel</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
