<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Laravel</title>

	<!-- Fonts -->
	<link rel="preconnect" href="https://fonts.bunny.net">
	<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

	<!-- Styles -->
	<style>
	/*! tailwindcss v4.0.14 | MIT License | https://tailwindcss.com */
	@layer theme {

		:root,
		:host {
			--font-sans: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
			--font-mono: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
			--color-green-600: oklch(.627 .194 149.214);
			--color-gray-900: oklch(.21 .034 264.665);
			--color-zinc-50: oklch(.985 0 0);
			--color-zinc-200: oklch(.92 .004 286.32);
			--color-zinc-400: oklch(.705 .015 286.067);
			--color-zinc-500: oklch(.552 .016 285.938);
			--color-zinc-600: oklch(.442 .017 285.786);
			--color-zinc-700: oklch(.37 .013 285.805);
			--color-zinc-800: oklch(.274 .006 286.033);
			--color-zinc-900: oklch(.21 .006 285.885);
			--color-neutral-100: oklch(.97 0 0);
			--color-neutral-200: oklch(.922 0 0);
			--color-neutral-700: oklch(.371 0 0);
			--color-neutral-800: oklch(.269 0 0);
			--color-neutral-900: oklch(.205 0 0);
			--color-neutral-950: oklch(.145 0 0);
			--color-stone-800: oklch(.268 .007 34.298);
			--color-stone-950: oklch(.147 .004 49.25);
			--color-black: #000;
			--color-white: #fff;
			--spacing: .25rem;
			--container-sm: 24rem;
			--container-md: 28rem;
			--container-lg: 32rem;
			--container-4xl: 56rem;
			--text-xs: .75rem;
			--text-xs--line-height: calc(1/.75);
			--text-sm: .875rem;
			--text-sm--line-height: calc(1.25/.875);
			--text-lg: 1.125rem;
			--text-lg--line-height: calc(1.75/1.125);
			--font-weight-normal: 400;
			--font-weight-medium: 500;
			--font-weight-semibold: 600;
			--leading-tight: 1.25;
			--leading-normal: 1.5;
			--radius-sm: .25rem;
			--radius-md: .375rem;
			--radius-lg: .5rem;
			--radius-xl: .75rem;
			--aspect-video: 16/9;
			--default-transition-duration: .15s;
			--default-transition-timing-function: cubic-bezier(.4, 0, .2, 1);
			--default-font-family: var(--font-sans);
			--default-font-feature-settings: var(--font-sans--font-feature-settings);
			--default-font-variation-settings: var(--font-sans--font-variation-settings);
			--default-mono-font-family: var(--font-mono);
			--default-mono-font-feature-settings: var(--font-mono--font-feature-settings);
			--default-mono-font-variation-settings: var(--font-mono--font-variation-settings)
		}
	}

	@layer base {

		*,
		:after,
		:before,
		::backdrop {
			box-sizing: border-box;
			border: 0 solid;
			margin: 0;
			padding: 0
		}

		::file-selector-button {
			box-sizing: border-box;
			border: 0 solid;
			margin: 0;
			padding: 0
		}

		html,
		:host {
			-webkit-text-size-adjust: 100%;
			tab-size: 4;
			line-height: 1.5;
			font-family: var(--default-font-family, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji");
			font-feature-settings: var(--default-font-feature-settings, normal);
			font-variation-settings: var(--default-font-variation-settings, normal);
			-webkit-tap-highlight-color: transparent
		}

		body {
			line-height: inherit
		}

		hr {
			height: 0;
			color: inherit;
			border-top-width: 1px
		}

		abbr:where([title]) {
			-webkit-text-decoration: underline dotted;
			text-decoration: underline dotted
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-size: inherit;
			font-weight: inherit
		}

		a {
			color: inherit;
			-webkit-text-decoration: inherit;
			-webkit-text-decoration: inherit;
			-webkit-text-decoration: inherit;
			text-decoration: inherit
		}

		b,
		strong {
			font-weight: bolder
		}

		code,
		kbd,
		samp,
		pre {
			font-family: var(--default-mono-font-family, ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace);
			font-feature-settings: var(--default-mono-font-feature-settings, normal);
			font-variation-settings: var(--default-mono-font-variation-settings, normal);
			font-size: 1em
		}

		small {
			font-size: 80%
		}

		sub,
		sup {
			vertical-align: baseline;
			font-size: 75%;
			line-height: 0;
			position: relative
		}

		sub {
			bottom: -.25em
		}

		sup {
			top: -.5em
		}

		table {
			text-indent: 0;
			border-color: inherit;
			border-collapse: collapse
		}

		:-moz-focusring {
			outline: auto
		}

		progress {
			vertical-align: baseline
		}

		summary {
			display: list-item
		}

		ol,
		ul,
		menu {
			list-style: none
		}

		img,
		svg,
		video,
		canvas,
		audio,
		iframe,
		embed,
		object {
			vertical-align: middle;
			display: block
		}

		img,
		video {
			max-width: 100%;
			height: auto
		}

		button,
		input,
		select,
		optgroup,
		textarea {
			font: inherit;
			font-feature-settings: inherit;
			font-variation-settings: inherit;
			letter-spacing: inherit;
			color: inherit;
			opacity: 1;
			background-color: #0000;
			border-radius: 0
		}

		::file-selector-button {
			font: inherit;
			font-feature-settings: inherit;
			font-variation-settings: inherit;
			letter-spacing: inherit;
			color: inherit;
			opacity: 1;
			background-color: #0000;
			border-radius: 0
		}

		:where(select:is([multiple], [size])) optgroup {
			font-weight: bolder
		}

		:where(select:is([multiple], [size])) optgroup option {
			padding-inline-start: 20px
		}

		::file-selector-button {
			margin-inline-end: 4px
		}

		::placeholder {
			opacity: 1;
			color: color-mix(in oklab, currentColor 50%, transparent)
		}

		textarea {
			resize: vertical
		}

		::-webkit-search-decoration {
			-webkit-appearance: none
		}

		::-webkit-date-and-time-value {
			min-height: 1lh;
			text-align: inherit
		}

		::-webkit-datetime-edit {
			display: inline-flex
		}

		::-webkit-datetime-edit-fields-wrapper {
			padding: 0
		}

		::-webkit-datetime-edit {
			padding-block: 0
		}

		::-webkit-datetime-edit-year-field {
			padding-block: 0
		}

		::-webkit-datetime-edit-month-field {
			padding-block: 0
		}

		::-webkit-datetime-edit-day-field {
			padding-block: 0
		}

		::-webkit-datetime-edit-hour-field {
			padding-block: 0
		}

		::-webkit-datetime-edit-minute-field {
			padding-block: 0
		}

		::-webkit-datetime-edit-second-field {
			padding-block: 0
		}

		::-webkit-datetime-edit-millisecond-field {
			padding-block: 0
		}

		::-webkit-datetime-edit-meridiem-field {
			padding-block: 0
		}

		:-moz-ui-invalid {
			box-shadow: none
		}

		button,
		input:where([type=button], [type=reset], [type=submit]) {
			appearance: button
		}

		::file-selector-button {
			appearance: button
		}

		::-webkit-inner-spin-button {
			height: auto
		}

		::-webkit-outer-spin-button {
			height: auto
		}

		[hidden]:where(:not([hidden=until-found])) {
			display: none !important
		}
	}

	@layer components;

	@layer utilities {
		.sr-only {
			clip: rect(0, 0, 0, 0);
			white-space: nowrap;
			border-width: 0;
			width: 1px;
			height: 1px;
			margin: -1px;
			padding: 0;
			position: absolute;
			overflow: hidden
		}

		.absolute {
			position: absolute
		}

		.relative {
			position: relative
		}

		.static {
			position: static
		}

		.sticky {
			position: sticky
		}

		.inset-0 {
			inset: calc(var(--spacing)*0)
		}

		.inset-y-\[3px\] {
			inset-block: 3px
		}

		.start-0 {
			inset-inline-start: calc(var(--spacing)*0)
		}

		.end-0 {
			inset-inline-end: calc(var(--spacing)*0)
		}

		.top-0 {
			top: calc(var(--spacing)*0)
		}

		.z-20 {
			z-index: 20
		}

		.container {
			width: 100%
		}

		@media (width>=40rem) {
			.container {
				max-width: 40rem
			}
		}

		@media (width>=48rem) {
			.container {
				max-width: 48rem
			}
		}

		@media (width>=64rem) {
			.container {
				max-width: 64rem
			}
		}

		@media (width>=80rem) {
			.container {
				max-width: 80rem
			}
		}

		@media (width>=96rem) {
			.container {
				max-width: 96rem
			}
		}

		.mx-auto {
			margin-inline: auto
		}

		.my-6 {
			margin-block: calc(var(--spacing)*6)
		}

		.-ms-8 {
			margin-inline-start: calc(var(--spacing)*-8)
		}

		.ms-1 {
			margin-inline-start: calc(var(--spacing)*1)
		}

		.ms-2 {
			margin-inline-start: calc(var(--spacing)*2)
		}

		.ms-4 {
			margin-inline-start: calc(var(--spacing)*4)
		}

		.me-1\.5 {
			margin-inline-end: calc(var(--spacing)*1.5)
		}

		.me-2 {
			margin-inline-end: calc(var(--spacing)*2)
		}

		.me-3 {
			margin-inline-end: calc(var(--spacing)*3)
		}

		.me-5 {
			margin-inline-end: calc(var(--spacing)*5)
		}

		.me-10 {
			margin-inline-end: calc(var(--spacing)*10)
		}

		.-mt-\[4\.9rem\] {
			margin-top: -4.9rem
		}

		.mt-2 {
			margin-top: calc(var(--spacing)*2)
		}

		.mt-4 {
			margin-top: calc(var(--spacing)*4)
		}

		.mt-5 {
			margin-top: calc(var(--spacing)*5)
		}

		.mt-6 {
			margin-top: calc(var(--spacing)*6)
		}

		.mt-10 {
			margin-top: calc(var(--spacing)*10)
		}

		.mt-auto {
			margin-top: auto
		}

		.-mb-px {
			margin-bottom: -1px
		}

		.mb-0\.5 {
			margin-bottom: calc(var(--spacing)*.5)
		}

		.mb-1 {
			margin-bottom: calc(var(--spacing)*1)
		}

		.mb-2 {
			margin-bottom: calc(var(--spacing)*2)
		}

		.mb-4 {
			margin-bottom: calc(var(--spacing)*4)
		}

		.mb-5 {
			margin-bottom: calc(var(--spacing)*5)
		}

		.mb-6 {
			margin-bottom: calc(var(--spacing)*6)
		}

		.mb-\[2px\] {
			margin-bottom: 2px
		}

		.block {
			display: block
		}

		.contents {
			display: contents
		}

		.flex {
			display: flex
		}

		.grid {
			display: grid
		}

		.hidden {
			display: none
		}

		.inline-block {
			display: inline-block
		}

		.inline-flex {
			display: inline-flex
		}

		.table {
			display: table
		}

		.aspect-\[335\/376\] {
			aspect-ratio: 335/376
		}

		.aspect-square {
			aspect-ratio: 1
		}

		.aspect-video {
			aspect-ratio: var(--aspect-video)
		}

		.size-3\! {
			width: calc(var(--spacing)*3) !important;
			height: calc(var(--spacing)*3) !important
		}

		.size-5 {
			width: calc(var(--spacing)*5);
			height: calc(var(--spacing)*5)
		}

		.size-8 {
			width: calc(var(--spacing)*8);
			height: calc(var(--spacing)*8)
		}

		.size-9 {
			width: calc(var(--spacing)*9);
			height: calc(var(--spacing)*9)
		}

		.size-full {
			width: 100%;
			height: 100%
		}

		.\!h-10 {
			height: calc(var(--spacing)*10) !important
		}

		.h-1\.5 {
			height: calc(var(--spacing)*1.5)
		}

		.h-2\.5 {
			height: calc(var(--spacing)*2.5)
		}

		.h-3\.5 {
			height: calc(var(--spacing)*3.5)
		}

		.h-7 {
			height: calc(var(--spacing)*7)
		}

		.h-8 {
			height: calc(var(--spacing)*8)
		}

		.h-9 {
			height: calc(var(--spacing)*9)
		}

		.h-10 {
			height: calc(var(--spacing)*10)
		}

		.h-14\.5 {
			height: calc(var(--spacing)*14.5)
		}

		.h-dvh {
			height: 100dvh
		}

		.h-full {
			height: 100%
		}

		.min-h-screen {
			min-height: 100vh
		}

		.min-h-svh {
			min-height: 100svh
		}

		.w-1\.5 {
			width: calc(var(--spacing)*1.5)
		}

		.w-2\.5 {
			width: calc(var(--spacing)*2.5)
		}

		.w-3\.5 {
			width: calc(var(--spacing)*3.5)
		}

		.w-8 {
			width: calc(var(--spacing)*8)
		}

		.w-9 {
			width: calc(var(--spacing)*9)
		}

		.w-10 {
			width: calc(var(--spacing)*10)
		}

		.w-\[220px\] {
			width: 220px
		}

		.w-\[448px\] {
			width: 448px
		}

		.w-full {
			width: 100%
		}

		.w-px {
			width: 1px
		}

		.max-w-\[335px\] {
			max-width: 335px
		}

		.max-w-lg {
			max-width: var(--container-lg)
		}

		.max-w-md {
			max-width: var(--container-md)
		}

		.max-w-none {
			max-width: none
		}

		.max-w-sm {
			max-width: var(--container-sm)
		}

		.flex-1 {
			flex: 1
		}

		.shrink-0 {
			flex-shrink: 0
		}

		.translate-y-0 {
			--tw-translate-y: calc(var(--spacing)*0);
			translate: var(--tw-translate-x)var(--tw-translate-y)
		}

		.cursor-pointer {
			cursor: pointer
		}

		.auto-rows-min {
			grid-auto-rows: min-content
		}

		.flex-col {
			flex-direction: column
		}

		.flex-col-reverse {
			flex-direction: column-reverse
		}

		.items-center {
			align-items: center
		}

		.items-start {
			align-items: flex-start
		}

		.justify-between {
			justify-content: space-between
		}

		.justify-center {
			justify-content: center
		}

		.justify-end {
			justify-content: flex-end
		}

		.gap-2 {
			gap: calc(var(--spacing)*2)
		}

		.gap-3 {
			gap: calc(var(--spacing)*3)
		}

		.gap-4 {
			gap: calc(var(--spacing)*4)
		}

		.gap-6 {
			gap: calc(var(--spacing)*6)
		}

		:where(.space-y-2>:not(:last-child)) {
			--tw-space-y-reverse: 0;
			margin-block-start: calc(calc(var(--spacing)*2)*var(--tw-space-y-reverse));
			margin-block-end: calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-y-reverse)))
		}

		:where(.space-y-3>:not(:last-child)) {
			--tw-space-y-reverse: 0;
			margin-block-start: calc(calc(var(--spacing)*3)*var(--tw-space-y-reverse));
			margin-block-end: calc(calc(var(--spacing)*3)*calc(1 - var(--tw-space-y-reverse)))
		}

		:where(.space-y-6>:not(:last-child)) {
			--tw-space-y-reverse: 0;
			margin-block-start: calc(calc(var(--spacing)*6)*var(--tw-space-y-reverse));
			margin-block-end: calc(calc(var(--spacing)*6)*calc(1 - var(--tw-space-y-reverse)))
		}

		:where(.space-y-\[2px\]>:not(:last-child)) {
			--tw-space-y-reverse: 0;
			margin-block-start: calc(2px*var(--tw-space-y-reverse));
			margin-block-end: calc(2px*calc(1 - var(--tw-space-y-reverse)))
		}

		:where(.space-x-0\.5>:not(:last-child)) {
			--tw-space-x-reverse: 0;
			margin-inline-start: calc(calc(var(--spacing)*.5)*var(--tw-space-x-reverse));
			margin-inline-end: calc(calc(var(--spacing)*.5)*calc(1 - var(--tw-space-x-reverse)))
		}

		:where(.space-x-1>:not(:last-child)) {
			--tw-space-x-reverse: 0;
			margin-inline-start: calc(calc(var(--spacing)*1)*var(--tw-space-x-reverse));
			margin-inline-end: calc(calc(var(--spacing)*1)*calc(1 - var(--tw-space-x-reverse)))
		}

		:where(.space-x-2>:not(:last-child)) {
			--tw-space-x-reverse: 0;
			margin-inline-start: calc(calc(var(--spacing)*2)*var(--tw-space-x-reverse));
			margin-inline-end: calc(calc(var(--spacing)*2)*calc(1 - var(--tw-space-x-reverse)))
		}

		.self-stretch {
			align-self: stretch
		}

		.truncate {
			text-overflow: ellipsis;
			white-space: nowrap;
			overflow: hidden
		}

		.overflow-hidden {
			overflow: hidden
		}

		.rounded-full {
			border-radius: 3.40282e38px
		}

		.rounded-lg {
			border-radius: var(--radius-lg)
		}

		.rounded-md {
			border-radius: var(--radius-md)
		}

		.rounded-sm {
			border-radius: var(--radius-sm)
		}

		.rounded-xl {
			border-radius: var(--radius-xl)
		}

		.rounded-ee-lg {
			border-end-end-radius: var(--radius-lg)
		}

		.rounded-es-lg {
			border-end-start-radius: var(--radius-lg)
		}

		.rounded-t-lg {
			border-top-left-radius: var(--radius-lg);
			border-top-right-radius: var(--radius-lg)
		}

		.border {
			border-style: var(--tw-border-style);
			border-width: 1px
		}

		.border-r {
			border-right-style: var(--tw-border-style);
			border-right-width: 1px
		}

		.border-b {
			border-bottom-style: var(--tw-border-style);
			border-bottom-width: 1px
		}

		.border-\[\#19140035\] {
			border-color: #19140035
		}

		.border-\[\#e3e3e0\] {
			border-color: #e3e3e0
		}

		.border-black {
			border-color: var(--color-black)
		}

		.border-neutral-200 {
			border-color: var(--color-neutral-200)
		}

		.border-transparent {
			border-color: #0000
		}

		.border-zinc-200 {
			border-color: var(--color-zinc-200)
		}

		.bg-\[\#1b1b18\] {
			background-color: #1b1b18
		}

		.bg-\[\#FDFDFC\] {
			background-color: #fdfdfc
		}

		.bg-\[\#dbdbd7\] {
			background-color: #dbdbd7
		}

		.bg-\[\#fff2f2\] {
			background-color: #fff2f2
		}

		.bg-neutral-100 {
			background-color: var(--color-neutral-100)
		}

		.bg-neutral-200 {
			background-color: var(--color-neutral-200)
		}

		.bg-neutral-900 {
			background-color: var(--color-neutral-900)
		}

		.bg-white {
			background-color: var(--color-white)
		}

		.bg-zinc-50 {
			background-color: var(--color-zinc-50)
		}

		.bg-zinc-200 {
			background-color: var(--color-zinc-200)
		}

		.fill-current {
			fill: currentColor
		}

		.stroke-gray-900\/20 {
			stroke: color-mix(in oklab, var(--color-gray-900)20%, transparent)
		}

		.p-0 {
			padding: calc(var(--spacing)*0)
		}

		.p-6 {
			padding: calc(var(--spacing)*6)
		}

		.p-10 {
			padding: calc(var(--spacing)*10)
		}

		.px-1 {
			padding-inline: calc(var(--spacing)*1)
		}

		.px-5 {
			padding-inline: calc(var(--spacing)*5)
		}

		.px-8 {
			padding-inline: calc(var(--spacing)*8)
		}

		.px-10 {
			padding-inline: calc(var(--spacing)*10)
		}

		.py-0\! {
			padding-block: calc(var(--spacing)*0) !important
		}

		.py-1 {
			padding-block: calc(var(--spacing)*1)
		}

		.py-1\.5 {
			padding-block: calc(var(--spacing)*1.5)
		}

		.py-2 {
			padding-block: calc(var(--spacing)*2)
		}

		.py-8 {
			padding-block: calc(var(--spacing)*8)
		}

		.ps-3 {
			padding-inline-start: calc(var(--spacing)*3)
		}

		.ps-7 {
			padding-inline-start: calc(var(--spacing)*7)
		}

		.pe-4 {
			padding-inline-end: calc(var(--spacing)*4)
		}

		.pb-4 {
			padding-bottom: calc(var(--spacing)*4)
		}

		.pb-12 {
			padding-bottom: calc(var(--spacing)*12)
		}

		.text-center {
			text-align: center
		}

		.text-start {
			text-align: start
		}

		.text-lg {
			font-size: var(--text-lg);
			line-height: var(--tw-leading, var(--text-lg--line-height))
		}

		.text-sm {
			font-size: var(--text-sm);
			line-height: var(--tw-leading, var(--text-sm--line-height))
		}

		.text-xs {
			font-size: var(--text-xs);
			line-height: var(--tw-leading, var(--text-xs--line-height))
		}

		.text-\[13px\] {
			font-size: 13px
		}

		.leading-\[20px\] {
			--tw-leading: 20px;
			line-height: 20px
		}

		.leading-none {
			--tw-leading: 1;
			line-height: 1
		}

		.leading-normal {
			--tw-leading: var(--leading-normal);
			line-height: var(--leading-normal)
		}

		.leading-tight {
			--tw-leading: var(--leading-tight);
			line-height: var(--leading-tight)
		}

		.font-medium {
			--tw-font-weight: var(--font-weight-medium);
			font-weight: var(--font-weight-medium)
		}

		.font-normal {
			--tw-font-weight: var(--font-weight-normal);
			font-weight: var(--font-weight-normal)
		}

		.font-semibold {
			--tw-font-weight: var(--font-weight-semibold);
			font-weight: var(--font-weight-semibold)
		}

		.\!text-green-600 {
			color: var(--color-green-600) !important
		}

		.text-\[\#1b1b18\] {
			color: #1b1b18
		}

		.text-\[\#706f6c\] {
			color: #706f6c
		}

		.text-\[\#F53003\],
		.text-\[\#f53003\] {
			color: #f53003
		}

		.text-black {
			color: var(--color-black)
		}

		.text-green-600 {
			color: var(--color-green-600)
		}

		.text-stone-800 {
			color: var(--color-stone-800)
		}

		.text-white {
			color: var(--color-white)
		}

		.text-zinc-400 {
			color: var(--color-zinc-400)
		}

		.text-zinc-500 {
			color: var(--color-zinc-500)
		}

		.text-zinc-600 {
			color: var(--color-zinc-600)
		}

		.lowercase {
			text-transform: lowercase
		}

		.underline {
			text-decoration-line: underline
		}

		.underline-offset-4 {
			text-underline-offset: 4px
		}

		.antialiased {
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale
		}

		.opacity-100 {
			opacity: 1
		}

		.shadow-\[0px_0px_1px_0px_rgba\(0\,0\,0\,0\.03\)\,0px_1px_2px_0px_rgba\(0\,0\,0\,0\.06\)\] {
			--tw-shadow: 0px 0px 1px 0px var(--tw-shadow-color, #00000008), 0px 1px 2px 0px var(--tw-shadow-color, #0000000f);
			box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
		}

		.shadow-\[inset_0px_0px_0px_1px_rgba\(26\,26\,0\,0\.16\)\] {
			--tw-shadow: inset 0px 0px 0px 1px var(--tw-shadow-color, #1a1a0029);
			box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
		}

		.shadow-xs {
			--tw-shadow: 0 1px 2px 0 var(--tw-shadow-color, #0000000d);
			box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
		}

		.outline {
			outline-style: var(--tw-outline-style);
			outline-width: 1px
		}

		.transition-all {
			transition-property: all;
			transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
			transition-duration: var(--tw-duration, var(--default-transition-duration))
		}

		.transition-opacity {
			transition-property: opacity;
			transition-timing-function: var(--tw-ease, var(--default-transition-timing-function));
			transition-duration: var(--tw-duration, var(--default-transition-duration))
		}

		.delay-300 {
			transition-delay: .3s
		}

		.duration-750 {
			--tw-duration: .75s;
			transition-duration: .75s
		}

		.not-has-\[nav\]\:hidden:not(:has(:is(nav))) {
			display: none
		}

		.group-data-open\/disclosure-button\:block:is(:where(.group\/disclosure-button)[data-open] *) {
			display: block
		}

		.group-data-open\/disclosure-button\:hidden:is(:where(.group\/disclosure-button)[data-open] *) {
			display: none
		}

		.before\:absolute:before {
			content: var(--tw-content);
			position: absolute
		}

		.before\:start-\[0\.4rem\]:before {
			content: var(--tw-content);
			inset-inline-start: .4rem
		}

		.before\:top-0:before {
			content: var(--tw-content);
			top: calc(var(--spacing)*0)
		}

		.before\:top-1\/2:before {
			content: var(--tw-content);
			top: 50%
		}

		.before\:bottom-0:before {
			content: var(--tw-content);
			bottom: calc(var(--spacing)*0)
		}

		.before\:bottom-1\/2:before {
			content: var(--tw-content);
			bottom: 50%
		}

		.before\:left-\[0\.4rem\]:before {
			content: var(--tw-content);
			left: .4rem
		}

		.before\:border-l:before {
			content: var(--tw-content);
			border-left-style: var(--tw-border-style);
			border-left-width: 1px
		}

		.before\:border-\[\#e3e3e0\]:before {
			content: var(--tw-content);
			border-color: #e3e3e0
		}

		@media (hover:hover) {
			.hover\:border-\[\#1915014a\]:hover {
				border-color: #1915014a
			}

			.hover\:border-\[\#19140035\]:hover {
				border-color: #19140035
			}

			.hover\:border-black:hover {
				border-color: var(--color-black)
			}

			.hover\:bg-black:hover {
				background-color: var(--color-black)
			}

			.hover\:bg-zinc-800\/5:hover {
				background-color: color-mix(in oklab, var(--color-zinc-800)5%, transparent)
			}

			.hover\:text-zinc-800:hover {
				color: var(--color-zinc-800)
			}
		}

		.data-open\:block[data-open] {
			display: block
		}

		@media (width<64rem) {
			.max-lg\:hidden {
				display: none
			}
		}

		@media (width<48rem) {
			.max-md\:flex-col {
				flex-direction: column
			}

			.max-md\:pt-6 {
				padding-top: calc(var(--spacing)*6)
			}
		}

		@media (width>=40rem) {
			.sm\:w-\[350px\] {
				width: 350px
			}

			.sm\:px-0 {
				padding-inline: calc(var(--spacing)*0)
			}
		}

		@media (width>=48rem) {
			.md\:hidden {
				display: none
			}

			.md\:w-\[220px\] {
				width: 220px
			}

			.md\:grid-cols-3 {
				grid-template-columns: repeat(3, minmax(0, 1fr))
			}

			.md\:p-10 {
				padding: calc(var(--spacing)*10)
			}
		}

		@media (width>=64rem) {
			.lg\:-ms-px {
				margin-inline-start: -1px
			}

			.lg\:ms-0 {
				margin-inline-start: calc(var(--spacing)*0)
			}

			.lg\:-mt-\[6\.6rem\] {
				margin-top: -6.6rem
			}

			.lg\:mb-0 {
				margin-bottom: calc(var(--spacing)*0)
			}

			.lg\:mb-6 {
				margin-bottom: calc(var(--spacing)*6)
			}

			.lg\:block {
				display: block
			}

			.lg\:flex {
				display: flex
			}

			.lg\:hidden {
				display: none
			}

			.lg\:aspect-auto {
				aspect-ratio: auto
			}

			.lg\:h-8 {
				height: calc(var(--spacing)*8)
			}

			.lg\:w-\[438px\] {
				width: 438px
			}

			.lg\:max-w-4xl {
				max-width: var(--container-4xl)
			}

			.lg\:max-w-none {
				max-width: none
			}

			.lg\:grow {
				flex-grow: 1
			}

			.lg\:grid-cols-2 {
				grid-template-columns: repeat(2, minmax(0, 1fr))
			}

			.lg\:flex-row {
				flex-direction: row
			}

			.lg\:justify-center {
				justify-content: center
			}

			.lg\:rounded-ss-lg {
				border-start-start-radius: var(--radius-lg)
			}

			.lg\:rounded-e-lg {
				border-start-end-radius: var(--radius-lg);
				border-end-end-radius: var(--radius-lg)
			}

			.lg\:rounded-e-lg\! {
				border-start-end-radius: var(--radius-lg) !important;
				border-end-end-radius: var(--radius-lg) !important
			}

			.lg\:rounded-ee-none {
				border-end-end-radius: 0
			}

			.lg\:rounded-t-none {
				border-top-left-radius: 0;
				border-top-right-radius: 0
			}

			.lg\:p-8 {
				padding: calc(var(--spacing)*8)
			}

			.lg\:p-20 {
				padding: calc(var(--spacing)*20)
			}

			.lg\:px-0 {
				padding-inline: calc(var(--spacing)*0)
			}
		}

		:where(.rtl\:space-x-reverse:where(:dir(rtl), [dir=rtl], [dir=rtl] *)>:not(:last-child)) {
			--tw-space-x-reverse: 1
		}

		@media (prefers-color-scheme:dark) {
			.dark\:block {
				display: block
			}

			.dark\:hidden {
				display: none
			}

			.dark\:border-r {
				border-right-style: var(--tw-border-style);
				border-right-width: 1px
			}

			.dark\:border-\[\#3E3E3A\] {
				border-color: #3e3e3a
			}

			.dark\:border-\[\#eeeeec\] {
				border-color: #eeeeec
			}

			.dark\:border-neutral-700 {
				border-color: var(--color-neutral-700)
			}

			.dark\:border-neutral-800 {
				border-color: var(--color-neutral-800)
			}

			.dark\:border-stone-800 {
				border-color: var(--color-stone-800)
			}

			.dark\:border-zinc-700 {
				border-color: var(--color-zinc-700)
			}

			.dark\:bg-\[\#0a0a0a\] {
				background-color: #0a0a0a
			}

			.dark\:bg-\[\#1D0002\] {
				background-color: #1d0002
			}

			.dark\:bg-\[\#3E3E3A\] {
				background-color: #3e3e3a
			}

			.dark\:bg-\[\#161615\] {
				background-color: #161615
			}

			.dark\:bg-\[\#eeeeec\] {
				background-color: #eeeeec
			}

			.dark\:bg-neutral-700 {
				background-color: var(--color-neutral-700)
			}

			.dark\:bg-stone-950 {
				background-color: var(--color-stone-950)
			}

			.dark\:bg-white\/30 {
				background-color: color-mix(in oklab, var(--color-white)30%, transparent)
			}

			.dark\:bg-zinc-800 {
				background-color: var(--color-zinc-800)
			}

			.dark\:bg-zinc-900 {
				background-color: var(--color-zinc-900)
			}

			.dark\:bg-linear-to-b {
				--tw-gradient-position: to bottom in oklab;
				background-image: linear-gradient(var(--tw-gradient-stops))
			}

			.dark\:from-neutral-950 {
				--tw-gradient-from: var(--color-neutral-950);
				--tw-gradient-stops: var(--tw-gradient-via-stops, var(--tw-gradient-position), var(--tw-gradient-from)var(--tw-gradient-from-position), var(--tw-gradient-to)var(--tw-gradient-to-position))
			}

			.dark\:to-neutral-900 {
				--tw-gradient-to: var(--color-neutral-900);
				--tw-gradient-stops: var(--tw-gradient-via-stops, var(--tw-gradient-position), var(--tw-gradient-from)var(--tw-gradient-from-position), var(--tw-gradient-to)var(--tw-gradient-to-position))
			}

			.dark\:stroke-neutral-100\/20 {
				stroke: color-mix(in oklab, var(--color-neutral-100)20%, transparent)
			}

			.dark\:text-\[\#1C1C1A\] {
				color: #1c1c1a
			}

			.dark\:text-\[\#A1A09A\] {
				color: #a1a09a
			}

			.dark\:text-\[\#EDEDEC\] {
				color: #ededec
			}

			.dark\:text-\[\#F61500\] {
				color: #f61500
			}

			.dark\:text-\[\#FF4433\] {
				color: #f43
			}

			.dark\:text-black {
				color: var(--color-black)
			}

			.dark\:text-white {
				color: var(--color-white)
			}

			.dark\:text-white\/80 {
				color: color-mix(in oklab, var(--color-white)80%, transparent)
			}

			.dark\:text-zinc-400 {
				color: var(--color-zinc-400)
			}

			.dark\:shadow-\[inset_0px_0px_0px_1px_\#fffaed2d\] {
				--tw-shadow: inset 0px 0px 0px 1px var(--tw-shadow-color, #fffaed2d);
				box-shadow: var(--tw-inset-shadow), var(--tw-inset-ring-shadow), var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)
			}

			.dark\:before\:border-\[\#3E3E3A\]:before {
				content: var(--tw-content);
				border-color: #3e3e3a
			}

			@media (hover:hover) {
				.dark\:hover\:border-\[\#3E3E3A\]:hover {
					border-color: #3e3e3a
				}

				.dark\:hover\:border-\[\#62605b\]:hover {
					border-color: #62605b
				}

				.dark\:hover\:border-white:hover {
					border-color: var(--color-white)
				}

				.dark\:hover\:bg-white:hover {
					background-color: var(--color-white)
				}

				.dark\:hover\:bg-white\/\[7\%\]:hover {
					background-color: color-mix(in oklab, var(--color-white)7%, transparent)
				}

				.dark\:hover\:text-white:hover {
					color: var(--color-white)
				}
			}
		}

		@starting-style {
			.starting\:translate-y-4 {
				--tw-translate-y: calc(var(--spacing)*4);
				translate: var(--tw-translate-x)var(--tw-translate-y)
			}
		}

		@starting-style {
			.starting\:translate-y-6 {
				--tw-translate-y: calc(var(--spacing)*6);
				translate: var(--tw-translate-x)var(--tw-translate-y)
			}
		}

		@starting-style {
			.starting\:opacity-0 {
				opacity: 0
			}
		}

		.\[\&\>div\>svg\]\:size-5>div>svg {
			width: calc(var(--spacing)*5);
			height: calc(var(--spacing)*5)
		}

		:where(.\[\:where\(\&\)\]\:size-4) {
			width: calc(var(--spacing)*4);
			height: calc(var(--spacing)*4)
		}

		:where(.\[\:where\(\&\)\]\:size-5) {
			width: calc(var(--spacing)*5);
			height: calc(var(--spacing)*5)
		}

		:where(.\[\:where\(\&\)\]\:size-6) {
			width: calc(var(--spacing)*6);
			height: calc(var(--spacing)*6)
		}
	}

	@property --tw-translate-x {
		syntax: "*";
		inherits: false;
		initial-value: 0
	}

	@property --tw-translate-y {
		syntax: "*";
		inherits: false;
		initial-value: 0
	}

	@property --tw-translate-z {
		syntax: "*";
		inherits: false;
		initial-value: 0
	}

	@property --tw-space-y-reverse {
		syntax: "*";
		inherits: false;
		initial-value: 0
	}

	@property --tw-space-x-reverse {
		syntax: "*";
		inherits: false;
		initial-value: 0
	}

	@property --tw-border-style {
		syntax: "*";
		inherits: false;
		initial-value: solid
	}

	@property --tw-leading {
		syntax: "*";
		inherits: false
	}

	@property --tw-font-weight {
		syntax: "*";
		inherits: false
	}

	@property --tw-shadow {
		syntax: "*";
		inherits: false;
		initial-value: 0 0 #0000
	}

	@property --tw-shadow-color {
		syntax: "*";
		inherits: false
	}

	@property --tw-inset-shadow {
		syntax: "*";
		inherits: false;
		initial-value: 0 0 #0000
	}

	@property --tw-inset-shadow-color {
		syntax: "*";
		inherits: false
	}

	@property --tw-ring-color {
		syntax: "*";
		inherits: false
	}

	@property --tw-ring-shadow {
		syntax: "*";
		inherits: false;
		initial-value: 0 0 #0000
	}

	@property --tw-inset-ring-color {
		syntax: "*";
		inherits: false
	}

	@property --tw-inset-ring-shadow {
		syntax: "*";
		inherits: false;
		initial-value: 0 0 #0000
	}

	@property --tw-ring-inset {
		syntax: "*";
		inherits: false
	}

	@property --tw-ring-offset-width {
		syntax: "<length>";
		inherits: false;
		initial-value: 0
	}

	@property --tw-ring-offset-color {
		syntax: "*";
		inherits: false;
		initial-value: #fff
	}

	@property --tw-ring-offset-shadow {
		syntax: "*";
		inherits: false;
		initial-value: 0 0 #0000
	}

	@property --tw-outline-style {
		syntax: "*";
		inherits: false;
		initial-value: solid
	}

	@property --tw-duration {
		syntax: "*";
		inherits: false
	}

	@property --tw-content {
		syntax: "*";
		inherits: false;
		initial-value: ""
	}

	@property --tw-gradient-position {
		syntax: "*";
		inherits: false
	}

	@property --tw-gradient-from {
		syntax: "<color>";
		inherits: false;
		initial-value: #0000
	}

	@property --tw-gradient-via {
		syntax: "<color>";
		inherits: false;
		initial-value: #0000
	}

	@property --tw-gradient-to {
		syntax: "<color>";
		inherits: false;
		initial-value: #0000
	}

	@property --tw-gradient-stops {
		syntax: "*";
		inherits: false
	}

	@property --tw-gradient-via-stops {
		syntax: "*";
		inherits: false
	}

	@property --tw-gradient-from-position {
		syntax: "<length-percentage>";
		inherits: false;
		initial-value: 0%
	}

	@property --tw-gradient-via-position {
		syntax: "<length-percentage>";
		inherits: false;
		initial-value: 50%
	}

	@property --tw-gradient-to-position {
		syntax: "<length-percentage>";
		inherits: false;
		initial-value: 100%
	}
	</style>
</head>

<body
	class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
	<header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
		@if (Route::has('login'))
		<nav class="flex items-center justify-end gap-4">
			@auth
			<a href="{{ url('/dashboard') }}"
				class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
				Dashboard
			</a>
			@else
			<a href="{{ route('login') }}"
				class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
				Log in
			</a>

			@if (Route::has('register'))
			<a href="{{ route('register') }}"
				class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
				Register
			</a>
			@endif
			@endauth
		</nav>
		@endif
	</header>
	<div
		class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
		<main class="flex max-w-[335px] w-full flex-col-reverse lg:max-w-4xl lg:flex-row">
			<div
				class="text-[13px] leading-[20px] flex-1 p-6 pb-12 lg:p-20 bg-white dark:bg-[#161615] dark:text-[#EDEDEC] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-es-lg rounded-ee-lg lg:rounded-ss-lg lg:rounded-ee-none">
				<h1 class="mb-1 font-medium">Let's get started</h1>
				<p class="mb-2 text-[#706f6c] dark:text-[#A1A09A]">Laravel has an incredibly rich ecosystem. <br>We
					suggest starting with the following.</p>
				<ul class="flex flex-col mb-4 lg:mb-6">
					<li
						class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:top-1/2 before:bottom-0 before:left-[0.4rem] before:absolute">
						<span class="relative py-1 bg-white dark:bg-[#161615]">
							<span
								class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
								<span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
							</span>
						</span>
						<span>
							Read the
							<a href="https://laravel.com/docs" target="_blank"
								class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ms-1">
								<span>Documentation</span>
								<svg width="10" height="11" viewBox="0 0 10 11" fill="none"
									xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5">
									<path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor"
										stroke-linecap="square" />
								</svg>
							</a>
						</span>
					</li>
					<li
						class="flex items-center gap-4 py-2 relative before:border-l before:border-[#e3e3e0] dark:before:border-[#3E3E3A] before:bottom-1/2 before:top-0 before:start-[0.4rem] before:absolute">
						<span class="relative py-1 bg-white dark:bg-[#161615]">
							<span
								class="flex items-center justify-center rounded-full bg-[#FDFDFC] dark:bg-[#161615] shadow-[0px_0px_1px_0px_rgba(0,0,0,0.03),0px_1px_2px_0px_rgba(0,0,0,0.06)] w-3.5 h-3.5 border dark:border-[#3E3E3A] border-[#e3e3e0]">
								<span class="rounded-full bg-[#dbdbd7] dark:bg-[#3E3E3A] w-1.5 h-1.5"></span>
							</span>
						</span>
						<span>
							Watch video tutorials at
							<a href="https://laracasts.com" target="_blank"
								class="inline-flex items-center space-x-1 font-medium underline underline-offset-4 text-[#f53003] dark:text-[#FF4433] ms-1">
								<span>Laracasts</span>
								<svg width="10" height="11" viewBox="0 0 10 11" fill="none"
									xmlns="http://www.w3.org/2000/svg" class="w-2.5 h-2.5">
									<path d="M7.70833 6.95834V2.79167H3.54167M2.5 8L7.5 3.00001" stroke="currentColor"
										stroke-linecap="square" />
								</svg>
							</a>
						</span>
					</li>
				</ul>
				<ul class="flex gap-3 text-sm leading-normal">
					<li>
						<a href="https://cloud.laravel.com" target="_blank"
							class="inline-block dark:bg-[#eeeeec] dark:border-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:border-white hover:bg-black hover:border-black px-5 py-1.5 bg-[#1b1b18] rounded-sm border border-black text-white text-sm leading-normal">
							Deploy now
						</a>
					</li>
				</ul>
			</div>
			<div
				class="bg-[#fff2f2] dark:bg-[#1D0002] relative lg:-ms-px -mb-px lg:mb-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg! aspect-[335/376] lg:aspect-auto w-full lg:w-[438px] shrink-0 overflow-hidden">
				{{-- Laravel Logo --}}
				<svg class="w-full text-[#F53003] dark:text-[#F61500] transition-all translate-y-0 opacity-100 max-w-none duration-750 starting:opacity-0 starting:translate-y-6"
					viewBox="0 0 438 104" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M17.2036 -3H0V102.197H49.5189V86.7187H17.2036V-3Z" fill="currentColor" />
					<path
						d="M110.256 41.6337C108.061 38.1275 104.945 35.3731 100.905 33.3681C96.8667 31.3647 92.8016 30.3618 88.7131 30.3618C83.4247 30.3618 78.5885 31.3389 74.201 33.2923C69.8111 35.2456 66.0474 37.928 62.9059 41.3333C59.7643 44.7401 57.3198 48.6726 55.5754 53.1293C53.8287 57.589 52.9572 62.274 52.9572 67.1813C52.9572 72.1925 53.8287 76.8995 55.5754 81.3069C57.3191 85.7173 59.7636 89.6241 62.9059 93.0293C66.0474 96.4361 69.8119 99.1155 74.201 101.069C78.5885 103.022 83.4247 103.999 88.7131 103.999C92.8016 103.999 96.8667 102.997 100.905 100.994C104.945 98.9911 108.061 96.2359 110.256 92.7282V102.195H126.563V32.1642H110.256V41.6337ZM108.76 75.7472C107.762 78.4531 106.366 80.8078 104.572 82.8112C102.776 84.8161 100.606 86.4183 98.0637 87.6206C95.5202 88.823 92.7004 89.4238 89.6103 89.4238C86.5178 89.4238 83.7252 88.823 81.2324 87.6206C78.7388 86.4183 76.5949 84.8161 74.7998 82.8112C73.004 80.8078 71.6319 78.4531 70.6856 75.7472C69.7356 73.0421 69.2644 70.1868 69.2644 67.1821C69.2644 64.1758 69.7356 61.3205 70.6856 58.6154C71.6319 55.9102 73.004 53.5571 74.7998 51.5522C76.5949 49.5495 78.738 47.9451 81.2324 46.7427C83.7252 45.5404 86.5178 44.9396 89.6103 44.9396C92.7012 44.9396 95.5202 45.5404 98.0637 46.7427C100.606 47.9451 102.776 49.5487 104.572 51.5522C106.367 53.5571 107.762 55.9102 108.76 58.6154C109.756 61.3205 110.256 64.1758 110.256 67.1821C110.256 70.1868 109.756 73.0421 108.76 75.7472Z"
						fill="currentColor" />
					<path
						d="M242.805 41.6337C240.611 38.1275 237.494 35.3731 233.455 33.3681C229.416 31.3647 225.351 30.3618 221.262 30.3618C215.974 30.3618 211.138 31.3389 206.75 33.2923C202.36 35.2456 198.597 37.928 195.455 41.3333C192.314 44.7401 189.869 48.6726 188.125 53.1293C186.378 57.589 185.507 62.274 185.507 67.1813C185.507 72.1925 186.378 76.8995 188.125 81.3069C189.868 85.7173 192.313 89.6241 195.455 93.0293C198.597 96.4361 202.361 99.1155 206.75 101.069C211.138 103.022 215.974 103.999 221.262 103.999C225.351 103.999 229.416 102.997 233.455 100.994C237.494 98.9911 240.611 96.2359 242.805 92.7282V102.195H259.112V32.1642H242.805V41.6337ZM241.31 75.7472C240.312 78.4531 238.916 80.8078 237.122 82.8112C235.326 84.8161 233.156 86.4183 230.614 87.6206C228.07 88.823 225.251 89.4238 222.16 89.4238C219.068 89.4238 216.275 88.823 213.782 87.6206C211.289 86.4183 209.145 84.8161 207.35 82.8112C205.554 80.8078 204.182 78.4531 203.236 75.7472C202.286 73.0421 201.814 70.1868 201.814 67.1821C201.814 64.1758 202.286 61.3205 203.236 58.6154C204.182 55.9102 205.554 53.5571 207.35 51.5522C209.145 49.5495 211.288 47.9451 213.782 46.7427C216.275 45.5404 219.068 44.9396 222.16 44.9396C225.251 44.9396 228.07 45.5404 230.614 46.7427C233.156 47.9451 235.326 49.5487 237.122 51.5522C238.917 53.5571 240.312 55.9102 241.31 58.6154C242.306 61.3205 242.806 64.1758 242.806 67.1821C242.805 70.1868 242.305 73.0421 241.31 75.7472Z"
						fill="currentColor" />
					<path d="M438 -3H421.694V102.197H438V-3Z" fill="currentColor" />
					<path d="M139.43 102.197H155.735V48.2834H183.712V32.1665H139.43V102.197Z" fill="currentColor" />
					<path
						d="M324.49 32.1665L303.995 85.794L283.498 32.1665H266.983L293.748 102.197H314.242L341.006 32.1665H324.49Z"
						fill="currentColor" />
					<path
						d="M376.571 30.3656C356.603 30.3656 340.797 46.8497 340.797 67.1828C340.797 89.6597 356.094 104 378.661 104C391.29 104 399.354 99.1488 409.206 88.5848L398.189 80.0226C398.183 80.031 389.874 90.9895 377.468 90.9895C363.048 90.9895 356.977 79.3111 356.977 73.269H411.075C413.917 50.1328 398.775 30.3656 376.571 30.3656ZM357.02 61.0967C357.145 59.7487 359.023 43.3761 376.442 43.3761C393.861 43.3761 395.978 59.7464 396.099 61.0967H357.02Z"
						fill="currentColor" />
				</svg>

				{{-- Light Mode 12 SVG --}}
				<svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ms-8 lg:ms-0 lg:-mt-[6.6rem] dark:hidden"
					viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g
						class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
						<path
							d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z"
							fill="black" />
						<path
							d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z"
							fill="black" />
						<path
							d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z"
							stroke="#1B1B18" stroke-width="1" />
						<path
							d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z"
							stroke="#1B1B18" stroke-width="1" />
						<path
							d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z"
							fill="#F8B803" />
						<path
							d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z"
							fill="#F8B803" />
						<path
							d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z"
							stroke="#1B1B18" stroke-width="1" />
						<path
							d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z"
							stroke="#1B1B18" stroke-width="1" />
					</g>
					<g style="mix-blend-mode: hard-light"
						class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
						<path
							d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z"
							fill="#F0ACB8" />
						<path
							d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z"
							fill="#F0ACB8" />
						<path
							d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z"
							stroke="#1B1B18" stroke-width="1" />
						<path
							d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z"
							stroke="#1B1B18" stroke-width="1" />
					</g>
					<g style="mix-blend-mode: plus-darker"
						class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
						<path
							d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z"
							fill="#F3BEC7" />
						<path
							d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z"
							fill="#F3BEC7" />
						<path
							d="M230.951 281.792L231.282 281.793C238.128 274.907 248.453 265.823 262.256 254.539C275.617 243.256 285.666 234.267 292.402 227.573C299.027 220.688 303.554 213.421 305.983 205.771C308.412 198.12 307.253 190.183 302.504 181.959C297.203 172.778 289.749 165.415 280.142 159.868C270.645 154.13 260.596 151.26 249.995 151.26C239.615 151.26 232.823 154.033 229.621 159.579C226.309 164.934 227.413 172.393 232.935 181.956L168.335 181.954C159.058 165.888 155.082 151.543 156.407 138.92C157.953 126.298 164.247 116.544 175.289 109.659C186.442 102.583 201.294 99.045 219.846 99.0457C239.281 99.0464 258.551 102.585 277.655 109.663C296.649 116.549 313.986 126.303 329.667 138.927C345.349 151.551 357.827 165.895 367.104 181.961C375.718 196.88 379.528 209.981 378.535 221.265C377.762 232.549 374.063 242.399 367.438 250.814C361.033 259.229 351.095 269.557 337.624 281.796L419.782 281.8L448.605 331.719L259.774 331.712L230.951 281.792Z"
							stroke="#1B1B18" stroke-width="1" />
						<path
							d="M51.8063 152.402L28.9479 152.401L-0.0411453 102.195L85.7608 102.198L218.282 331.711L155.339 331.709L51.8063 152.402Z"
							stroke="#1B1B18" stroke-width="1" />
					</g>
					<g
						class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
						<path
							d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="bevel" />
					</g>
					<g style="mix-blend-mode: hard-light"
						class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
						<path
							d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z"
							fill="#F0ACB8" />
						<path
							d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z"
							stroke="#1B1B18" stroke-width="1" stroke-linejoin="round" />
					</g>
					<g style="mix-blend-mode: hard-light"
						class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
						<path
							d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z"
							fill="#F0ACB8" />
						<path
							d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z"
							stroke="#1B1B18" stroke-width="1" />
					</g>
				</svg>

				{{-- Dark Mode 12 SVG --}}
				<svg class="w-[448px] max-w-none relative -mt-[4.9rem] -ms-8 lg:ms-0 lg:-mt-[6.6rem] hidden dark:block"
					viewBox="0 0 440 376" fill="none" xmlns="http://www.w3.org/2000/svg">
					<g
						class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
						<path
							d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z"
							fill="black" />
						<path
							d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z"
							fill="black" />
						<path
							d="M188.263 355.73L188.595 355.73C195.441 348.845 205.766 339.761 219.569 328.477C232.93 317.193 242.978 308.205 249.714 301.511C256.34 294.626 260.867 287.358 263.296 279.708C265.725 272.058 264.565 264.121 259.816 255.896C254.516 246.716 247.062 239.352 237.454 233.805C227.957 228.067 217.908 225.198 207.307 225.198C196.927 225.197 190.136 227.97 186.934 233.516C183.621 238.872 184.726 246.331 190.247 255.894L125.647 255.891C116.371 239.825 112.395 225.481 113.72 212.858C115.265 200.235 121.559 190.481 132.602 183.596C143.754 176.52 158.607 172.982 177.159 172.983C196.594 172.984 215.863 176.523 234.968 183.6C253.961 190.486 271.299 200.241 286.98 212.864C302.661 225.488 315.14 239.833 324.416 255.899C333.03 270.817 336.841 283.918 335.847 295.203C335.075 306.487 331.376 316.336 324.75 324.751C318.346 333.167 308.408 343.494 294.936 355.734L377.094 355.737L405.917 405.656L217.087 405.649L188.263 355.73Z"
							stroke="#FF750F" stroke-width="1" />
						<path
							d="M9.11884 226.339L-13.7396 226.338L-42.7286 176.132L43.0733 176.135L175.595 405.649L112.651 405.647L9.11884 226.339Z"
							stroke="#FF750F" stroke-width="1" />
						<path
							d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z"
							fill="#391800" />
						<path
							d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z"
							fill="#391800" />
						<path
							d="M204.592 327.449L204.923 327.449C211.769 320.564 222.094 311.479 235.897 300.196C249.258 288.912 259.306 279.923 266.042 273.23C272.668 266.345 277.195 259.077 279.624 251.427C282.053 243.777 280.893 235.839 276.145 227.615C270.844 218.435 263.39 211.071 253.782 205.524C244.285 199.786 234.236 196.917 223.635 196.916C213.255 196.916 206.464 199.689 203.262 205.235C199.949 210.59 201.054 218.049 206.575 227.612L141.975 227.61C132.699 211.544 128.723 197.2 130.048 184.577C131.593 171.954 137.887 162.2 148.93 155.315C160.083 148.239 174.935 144.701 193.487 144.702C212.922 144.703 232.192 148.242 251.296 155.319C270.289 162.205 287.627 171.96 303.308 184.583C318.989 197.207 331.468 211.552 340.745 227.618C349.358 242.536 353.169 255.637 352.175 266.921C351.403 278.205 347.704 288.055 341.078 296.47C334.674 304.885 324.736 315.213 311.264 327.453L393.422 327.456L422.246 377.375L233.415 377.368L204.592 327.449Z"
							stroke="#FF750F" stroke-width="1" />
						<path
							d="M25.447 198.058L2.58852 198.057L-26.4005 147.851L59.4015 147.854L191.923 377.368L128.979 377.365L25.447 198.058Z"
							stroke="#FF750F" stroke-width="1" />
					</g>
					<g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4"
						style="mix-blend-mode:hard-light">
						<path
							d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z"
							fill="#733000" />
						<path
							d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z"
							fill="#733000" />
						<path
							d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.725 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z"
							stroke="#FF750F" stroke-width="1" />
						<path
							d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z"
							stroke="#FF750F" stroke-width="1" />
					</g>
					<g
						class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
						<path
							d="M217.342 305.363L217.673 305.363C224.519 298.478 234.844 289.393 248.647 278.11C262.008 266.826 272.056 257.837 278.792 251.144C285.418 244.259 289.945 236.991 292.374 229.341C294.803 221.691 293.643 213.753 288.895 205.529C283.594 196.349 276.14 188.985 266.532 183.438C257.035 177.7 246.986 174.831 236.385 174.83C226.005 174.83 219.214 177.603 216.012 183.149C212.699 188.504 213.804 195.963 219.325 205.527L154.726 205.524C145.449 189.458 141.473 175.114 142.798 162.491C144.343 149.868 150.637 140.114 161.68 133.229C172.833 126.153 187.685 122.615 206.237 122.616C225.672 122.617 244.942 126.156 264.046 133.233C283.039 140.119 300.377 149.874 316.058 162.497C331.739 175.121 344.218 189.466 353.495 205.532C362.108 220.45 365.919 233.551 364.925 244.835C364.153 256.12 360.454 265.969 353.828 274.384C347.424 282.799 337.486 293.127 324.014 305.367L406.172 305.37L434.996 355.289L246.165 355.282L217.342 305.363Z"
							stroke="#FF750F" stroke-width="1" />
						<path
							d="M38.197 175.972L15.3385 175.971L-13.6505 125.765L72.1515 125.768L204.673 355.282L141.729 355.279L38.197 175.972Z"
							stroke="#FF750F" stroke-width="1" />
					</g>
					<g
						class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4">
						<path
							d="M188.467 355.363L188.798 355.363C195.644 348.478 205.969 339.393 219.772 328.11C233.133 316.826 243.181 307.837 249.917 301.144C253.696 297.217 256.792 293.166 259.205 288.991C261.024 285.845 262.455 282.628 263.499 279.341C265.928 271.691 264.768 263.753 260.02 255.529C254.719 246.349 247.265 238.985 237.657 233.438C228.16 227.7 218.111 224.831 207.51 224.83C197.13 224.83 190.339 227.603 187.137 233.149C183.824 238.504 184.929 245.963 190.45 255.527L125.851 255.524C116.574 239.458 112.598 225.114 113.923 212.491C114.615 206.836 116.261 201.756 118.859 197.253C122.061 191.704 126.709 187.03 132.805 183.229C143.958 176.153 158.81 172.615 177.362 172.616C196.797 172.617 216.067 176.156 235.171 183.233C254.164 190.119 271.502 199.874 287.183 212.497C302.864 225.121 315.343 239.466 324.62 255.532C333.233 270.45 337.044 283.551 336.05 294.835C335.46 303.459 333.16 311.245 329.151 318.194C327.915 320.337 326.515 322.4 324.953 324.384C318.549 332.799 308.611 343.127 295.139 355.367L377.297 355.37L406.121 405.289L217.29 405.282L188.467 355.363Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M9.32197 225.972L-13.5365 225.971L-42.5255 175.765L43.2765 175.768L175.798 405.282L112.854 405.279L9.32197 225.972Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M345.247 111.915C329.566 99.2919 312.229 89.5371 293.235 82.6512L235.167 183.228C254.161 190.114 271.498 199.869 287.179 212.492L345.247 111.915Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M382.686 154.964C373.41 138.898 360.931 124.553 345.25 111.93L287.182 212.506C302.863 225.13 315.342 239.475 324.618 255.541L382.686 154.964Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M293.243 82.6472C274.139 75.57 254.869 72.031 235.434 72.0303L177.366 172.607C196.801 172.608 216.071 176.147 235.175 183.224L293.243 82.6472Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M394.118 194.257C395.112 182.973 391.301 169.872 382.688 154.953L324.619 255.53C333.233 270.448 337.044 283.55 336.05 294.834L394.118 194.257Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M235.432 72.0311C216.88 72.0304 202.027 75.5681 190.875 82.6442L132.806 183.221C143.959 176.145 158.812 172.607 177.363 172.608L235.432 72.0311Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M265.59 124.25C276.191 124.251 286.24 127.12 295.737 132.858L237.669 233.435C228.172 227.697 218.123 224.828 207.522 224.827L265.59 124.25Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M295.719 132.859C305.326 138.406 312.78 145.77 318.081 154.95L260.013 255.527C254.712 246.347 247.258 238.983 237.651 233.436L295.719 132.859Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M387.218 217.608C391.227 210.66 393.527 202.874 394.117 194.25L336.049 294.827C335.459 303.451 333.159 311.237 329.15 318.185L387.218 217.608Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M245.211 132.577C248.413 127.03 255.204 124.257 265.584 124.258L207.516 224.835C197.136 224.834 190.345 227.607 187.143 233.154L245.211 132.577Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M318.094 154.945C322.842 163.17 324.002 171.107 321.573 178.757L263.505 279.334C265.934 271.684 264.774 263.746 260.026 255.522L318.094 154.945Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M176.925 96.6737C180.127 91.1249 184.776 86.4503 190.871 82.6499L132.803 183.227C126.708 187.027 122.059 191.702 118.857 197.25L176.925 96.6737Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M387.226 217.606C385.989 219.749 384.59 221.813 383.028 223.797L324.96 324.373C326.522 322.39 327.921 320.326 329.157 318.183L387.226 217.606Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M317.269 188.408C319.087 185.262 320.519 182.045 321.562 178.758L263.494 279.335C262.451 282.622 261.019 285.839 259.201 288.985L317.269 188.408Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M245.208 132.573C241.895 137.928 243 145.387 248.522 154.95L190.454 255.527C184.932 245.964 183.827 238.505 187.14 233.15L245.208 132.573Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M176.93 96.6719C174.331 101.175 172.686 106.255 171.993 111.91L113.925 212.487C114.618 206.831 116.263 201.752 118.862 197.249L176.93 96.6719Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M317.266 188.413C314.853 192.589 311.757 196.64 307.978 200.566L249.91 301.143C253.689 297.216 256.785 293.166 259.198 288.99L317.266 188.413Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M464.198 304.708L435.375 254.789L377.307 355.366L406.13 405.285L464.198 304.708Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M353.209 254.787C366.68 242.548 376.618 232.22 383.023 223.805L324.955 324.382C318.55 332.797 308.612 343.124 295.141 355.364L353.209 254.787Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M435.37 254.787L353.212 254.784L295.144 355.361L377.302 355.364L435.37 254.787Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M183.921 154.947L248.521 154.95L190.453 255.527L125.853 255.524L183.921 154.947Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M171.992 111.914C170.668 124.537 174.643 138.881 183.92 154.947L125.852 255.524C116.575 239.458 112.599 225.114 113.924 212.491L171.992 111.914Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M307.987 200.562C301.251 207.256 291.203 216.244 277.842 227.528L219.774 328.105C233.135 316.821 243.183 307.832 249.919 301.139L307.987 200.562Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M15.5469 75.1797L44.5359 125.386L-13.5321 225.963L-42.5212 175.756L15.5469 75.1797Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M277.836 227.536C264.033 238.82 253.708 247.904 246.862 254.789L188.794 355.366C195.64 348.481 205.965 339.397 219.768 328.113L277.836 227.536Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M275.358 304.706L464.189 304.713L406.12 405.29L217.29 405.283L275.358 304.706Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M44.5279 125.39L67.3864 125.39L9.31834 225.967L-13.5401 225.966L44.5279 125.39Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path
							d="M101.341 75.1911L233.863 304.705L175.795 405.282L43.2733 175.768L101.341 75.1911ZM15.5431 75.19L-42.525 175.767L43.277 175.77L101.345 75.1932L15.5431 75.19Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M246.866 254.784L246.534 254.784L188.466 355.361L188.798 355.361L246.866 254.784Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M246.539 254.781L275.362 304.701L217.294 405.277L188.471 355.358L246.539 254.781Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M67.3906 125.391L170.923 304.698L112.855 405.275L9.32257 225.967L67.3906 125.391Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
						<path d="M170.921 304.699L233.865 304.701L175.797 405.278L112.853 405.276L170.921 304.699Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="bevel" />
					</g>
					<g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4"
						style="mix-blend-mode:hard-light">
						<path
							d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z"
							fill="#4B0600" />
						<path
							d="M246.544 254.79L246.875 254.79C253.722 247.905 264.046 238.82 277.849 227.537C291.21 216.253 301.259 207.264 307.995 200.57C314.62 193.685 319.147 186.418 321.577 178.768C324.006 171.117 322.846 163.18 318.097 154.956C312.796 145.775 305.342 138.412 295.735 132.865C286.238 127.127 276.189 124.258 265.588 124.257C255.208 124.257 248.416 127.03 245.214 132.576C241.902 137.931 243.006 145.39 248.528 154.953L183.928 154.951C174.652 138.885 170.676 124.541 172 111.918C173.546 99.2946 179.84 89.5408 190.882 82.6559C202.035 75.5798 216.887 72.0421 235.439 72.0428C254.874 72.0435 274.144 75.5825 293.248 82.6598C312.242 89.5457 329.579 99.3005 345.261 111.924C360.942 124.548 373.421 138.892 382.697 154.958C391.311 169.877 395.121 182.978 394.128 194.262C393.355 205.546 389.656 215.396 383.031 223.811C376.627 232.226 366.688 242.554 353.217 254.794L435.375 254.797L464.198 304.716L275.367 304.709L246.544 254.79Z"
							stroke="#FF750F" stroke-width="1" stroke-linejoin="round" />
					</g>
					<g class="transition-all delay-300 translate-y-0 opacity-100 duration-750 starting:opacity-0 starting:translate-y-4"
						style="mix-blend-mode:hard-light">
						<path
							d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z"
							fill="#4B0600" />
						<path
							d="M67.41 125.402L44.5515 125.401L15.5625 75.1953L101.364 75.1985L233.886 304.712L170.942 304.71L67.41 125.402Z"
							stroke="#FF750F" stroke-width="1" />
					</g>
				</svg>
				<div
					class="absolute inset-0 rounded-t-lg lg:rounded-t-none lg:rounded-e-lg shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
				</div>
			</div>
		</main>
	</div>

	@if (Route::has('login'))
	<div class="h-14.5 hidden lg:block"></div>
	@endif
</body>

</html>