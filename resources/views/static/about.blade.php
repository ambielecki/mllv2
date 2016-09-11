@extends('layouts.master')

@section('title')
    {{--  Add title here--}}
    Malden Little League - About MLL
@stop

@section('head')
    {{-- Add page specific css--}}
@stop

@section('content')
    {{-- Page Content --}}
    <div class="row">
        <div class="col s12">
            <div class="card">
                <div class="card-content">
                    <h3>About Malden Little League - Our Programs</h3>
                    <div class="divider"></div>
                    <h5>Tee Ball Program (late April - late June)</h5>
                    <p>
                        This program is open to all children age 4 - 6 who reside in the City of Malden.
                        Registration Fee: $50. Fundraising Fee: $50.00 per child or $80.00 family fundraising cap.
                        Fundraising must be paid at time of registration. Malden Little League has adopted the new Little League Tee Ball program.
                        It is an 8-week co-ed plan and resource that features structured learning, highlighted by one practice and one game per week.
                        Over the course of the season, coaches and parents will engage in a series of lessons utilizing up to 40 activities that include skills,
                        drills and plenty of physical activity. The Tee Ball program will conclude in late June with a Field Day/Awards being held at Trafton Park (Date TBA)
                    </p>
                    <div class="divider"></div>
                    <h5>Challenger Program (late April - late June)</h5>
                    <p>
                        The Challenger Division was established in 1989 as a separate division of Little League to enable boys and girls with physical and mental challenges,
                        ages 4-18, or up to age 22 if still enrolled in high school. No child will be turned away.
                        The Challenger Division plays one game per week on Sunday afternoons at Bruce Field in Malden.
                        Registration is free. Fundraising is optional. The Challenger Program will conclude in late June with an Awards Banquet.
                        The Challenger Program has been funded in part by a generous donation by Teamsters Local Union No. 25.
                    </p>
                    <div class="divider"></div>
                    <h5>Farm Division Program (early April - late June)</h5>
                    <p>
                        This program is open to all children ages 7 - 8 who reside or attend school in Malden.
                        The Farm Division is a developmental program designed to teach fundamental baseball skills including hitting, throwing, fielding, and pitching.
                        The program uses a combination of "coach pitch" and "player pitch" formats.
                        Teams will play two games per week and participate in at least one practice per week.
                        Registration Fee: $55. Fundraising Fee: $50.00 per child or $80.00 family fundraising cap.
                        Fundraising must be paid at time of registration. The Farm Program will conclude in late June with a Field Day/Awards being held at Trafton Park (Date TBA).
                    </p>
                    <div class="divider"></div>
                    <h5>Minor Division Program (early April - late June)</h5>
                    <p>
                        This program is open to all children ages 9 - 11 who reside or attend school in Malden.
                        Under special circumstances, a 12 year may be allowed to play in the Minor Division (waiver required).
                        The Minor league Division is designed as a bridge between the developmental Farm Division and the Major Division.
                        More advanced skills of hitting, pitching, throwing and fielding are emphasized with the goal of reaching a skill level that prepares the child for the Major Division.
                        Players pitch in games. Scores and standings are kept with a division champion determined at the end of the season, followed by playoffs.
                        Teams will be 2 - 3 games per week and hold at least one practice per week. Registration Fee: $70.
                        Fundraising Fee: $50.00 per child or $80.00 family fundraising cap. Fundraising must be paid at time of registration.
                        The Minor Division program's season concludes with the Malden Minor City Series in mid-June. An Awards Banquet for this division is held in September.
                    </p>
                    <div class="divider"></div>
                    <h5>Major Division Program (late March - late June)</h5>
                    <p>
                        This program is open to all children ages 10 - 12 who reside or attend school in Malden.
                        The Major division is a competitive division for skilled players.
                        All candidates must try-out, during the league's evaluation process held in March.
                        Each player is assured minimum playing time in each game of at least 3 innings.
                        The Major League division is a commitment for both player and parent during the season.
                        Teams will play 2 - 3 games and may hold two or more practices per week.
                        Malden Little League District 12 Tournament team (All Star Team) is selected from the Major League division only.
                        Postseason tournament play may extend through July into August.
                        Players 12 years of age, unless granted a waiver by Little League international,
                        MUST participate in the Major League evaluation and be selected to a Major Division roster.
                        Registration Fee: $70. Fundraising Fee: $50.00 per child or $80.00 family fundraising cap.
                        Fundraising must be paid at time of registration. The Major Division program's season concludes with the Malden Major City Series in mid-June.
                        An Awards Banquet for this division is held in September.
                    </p>
                </div>
            </div>
        </div>
    </div>

@stop

@section('body')
    {{-- Page Specific JS --}}
    <script src="/js/register.js"></script>
@stop