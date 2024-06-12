<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 7b1615156b2e7cfdcfc6a8060bd437be1590e0c8
Package.describe({
  name: 'dangrossman:bootstrap-daterangepicker',
  version: '3.0.5',
  summary: 'Date range picker component',
  git: 'https://github.com/dangrossman/daterangepicker',
  documentation: 'README.md'
});

Package.onUse(function(api) {
  api.versionsFrom('METEOR@0.9.0.1');

  api.use('momentjs:moment@2.22.1', ["client"]);
  api.use('jquery@3.3.1', ["client"]);

  api.addFiles('daterangepicker.js', ["client"]);
  api.addFiles('daterangepicker.css', ["client"]);
});
<<<<<<< HEAD
=======
Package.describe({
  name: 'dangrossman:bootstrap-daterangepicker',
  version: '3.0.5',
  summary: 'Date range picker component',
  git: 'https://github.com/dangrossman/daterangepicker',
  documentation: 'README.md'
});

Package.onUse(function(api) {
  api.versionsFrom('METEOR@0.9.0.1');

  api.use('momentjs:moment@2.22.1', ["client"]);
  api.use('jquery@3.3.1', ["client"]);

  api.addFiles('daterangepicker.js', ["client"]);
  api.addFiles('daterangepicker.css', ["client"]);
});
>>>>>>> 8f13e6f674ae26600127cc5ea51637defec6291b
=======
>>>>>>> 7b1615156b2e7cfdcfc6a8060bd437be1590e0c8
