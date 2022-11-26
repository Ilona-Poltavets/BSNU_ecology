@extends('layouts.app')
@section('title',"About us")
@section('content')
    <h1 class="funny-title section-title">@lang("messages.About")</h1>
    <div class="container">
        <div class="poster">
            <img src="{{asset("images/poster.png")}}" alt=""/>
        </div>
        <div class="about">
            <h5 class="text-center">
                «European Green Dimensions» 101081525 JM EUGD (101081525 — JM EUGD — ERASMUS-JMO-2022-HEI-TCH-RSCH)
            </h5>
            <h5 class="text-center">
                «Європейські зелені виміри» 101081525 JM EUGD (101081525 — JM EUGD — ERASMUS-JMO-2022-HEI-TCH-RSCH)
            </h5>
            <table class="custom_table">
                <tr>
                    <td>Programme</td>
                    <td>EU Erasmus+JM</td>
                </tr>
                <tr>
                    <td>Project type</td>
                    <td>CHAIR</td>
                </tr>
                <tr>
                    <td>Project period</td>
                    <td>2022–2025</td>
                </tr>
                <tr>
                    <td>Region</td>
                    <td>Mykolaiv Region</td>
                </tr>
                <tr>
                    <td>City</td>
                    <td>Mykolaiv</td>
                </tr>
                <tr>
                    <td>University</td>
                    <td>Petro Mohyla Black Sea National University</td>
                </tr>
                <tr>
                    <td>Coordinator</td>
                    <td>Professor Olena Mitryasova
                        +380952880479
                        eco-terra@ukr.net
                    </td>
                </tr>
            </table>
            <p class="main_text">
                The JM Chair aims to (1) better understand the harmonization of EU green policies and the best practices
                in the field of environmental security in the context of climate change to achieve the goals of
                sustainable development; (2) raising global and national awareness of sustainable development issues and
                the crucial role of strong partnerships and cooperation as powerful factors in achieving the SDGs
                successfully; (3) raising awareness of existing European and global frameworks that are important for
                sustainable environmental security and achieving the relevant SDGs; (4) introduction of coverage of
                positive European practices in the field of the green policy of environmental management, security and
                quality for the purposes of sustainable development; (5) pooling the EU's diverse experience in working
                together for change and bringing about elements of improvement in all areas of environmental security.
            </p>
            <p class="main_text">
                The JM Chair includes training courses on the European Green Dimension and the best current practices of
                environmental management for master's, Ph.D., bachelor’s students of the degree in ecology and other
                educational programmes and also other target groups. The JM Chair also covers summer schools and a
                conference for target groups: students, researchers, politicians, NGOs, industry, and the public.
            </p>
            <p class="main_text">
                The main results of the JM Chair are preparation of new change agents, raising students' awareness and
                level of knowledge about key aspects of the effectiveness and challenges of EU green policy, as well as
                transforming this knowledge into practical approaches and measures for effective environmental
                management.
            </p>
        </div>
    </div>
@endsection
