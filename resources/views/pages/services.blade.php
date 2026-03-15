@extends('layouts.app')
@section('title', 'Services | AKSIT Global')
@section('content')
<x-hero title="Technology Services" subtitle="Purpose-built services for performance, security, and growth."/>
<section class="mx-auto grid max-w-7xl gap-6 px-6 py-16 md:grid-cols-2">
<x-card title="Software Development">Custom business applications with maintainable architecture and strong security fundamentals.</x-card>
<x-card title="Web Development">Fast, SEO-ready, mobile-responsive websites and portals for modern organizations.</x-card>
<x-card title="Mobile App Development">User-centric Android/iOS experiences connected to robust backend systems.</x-card>
<x-card title="IT Solutions">Tailored IT consulting and digital transformation plans aligned to your operations.</x-card>
<x-card title="Managed IT Services">Proactive monitoring, support, and maintenance for uninterrupted business continuity.</x-card>
<x-card title="Network Infrastructure Design">Scalable network planning, routing, switching, and secure connectivity deployments.</x-card>
</section>
@endsection
