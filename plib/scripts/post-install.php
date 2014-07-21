<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.
pm_Context::init('panel-stats');

pm_Settings::set('useAuth', true);
pm_Settings::set('authToken', md5(uniqid(rand(), true)));

