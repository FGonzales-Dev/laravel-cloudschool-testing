@extends('errors.minimal-layout')
@section('title', '500 ' . __('Internal Server Error'))
@section('code', '500')
@section('name', __('Internal Server Error'))
@section('message', __('An error occurred processing your requests.'))
