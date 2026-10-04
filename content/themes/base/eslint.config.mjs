import humanmade from '@humanmade/eslint-config';

const base = Array.isArray( humanmade ) ? humanmade : [ humanmade ];

export default [
	{ ignores: [ 'vendor/**', 'node_modules/**' ] },
	...base,
];
