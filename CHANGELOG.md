# Release Notes

## 2.3.0 (2022-09-16)

- Update vendor libs
- Fix field-object js error
- Don't apply default content fields on update (saveItem)
- Fix GraphQL error when numeric field names are used
- Fix wysiwyg field (Safari) #24
- Fix enter on selected result in app search
- Update Vue to 3.2.39
- Improve custom api endpoint resolving
- Fix updating items via API #27 @o-


## 2.2.2 (2022-08-20)

- Add `./tower app:update` cli command to update Cockpit to the latest or specific version
- Fix exposing 2FA secret in JWT token on login
- Enable keyboard navigation in search modal #14 @raffaelj
- Prevent double loading of field-code.js #15 @raffaelj
- Fix 2fa for login modal #13 @raffaelj

## 2.2.1 (2022-08-10)

- Fix linked tree content item display resolver
- Refactor content models index page

## 2.2.0 (2022-08-08)

- Add create|update|delete endpoints content item to REST API
- Add GraphQL mutation saveContentItem to create|update content items
- Add GraphQL mutation deleteContentItem to delete content items
- Add app side panel (admin layout)
- Stop execution of code after redirecting

## 2.1.2 (2022-08-04)

- 🚨 Fix typo field-contentItemtLink -> Need to re-assign field type contentItemLink 🚨
- General cleanup + fix typos
- Add content tree items reorder permission
- Refactor app layout header
- Show more detailed error message if saving user settings fail
- Hide publish state configuration ui if missing permission to mange publish state
- Fix selected item link of tree model
- Fix missing assets folders permission checks

## 2.1.1 (2022-08-02)

- Fix tree model route in app search results
- Fix loosing nested level on saving tree item

## 2.1.0 (2022-08-01)

- Add initial global app search implementation (alt|option + f)
- Minor fixes on closing html tag + uninitialized variable #11 @remluben
- Update lib/vendor
- Update vendor assets sortablejs v1.15, uppy v2.13.1, tinyMCE v6.1.2
- Add model type tree - organize content items as tree

## 2.0.2 (2022-07-20)

- Fix select boxes in dark theme (chrome on windows) #8
- Change login (noun) to log in (verb)
- Fix required field check on nested repeatable items
- Enable picking item by clicking on empty placeholder area (Asset + Content Link field)
- Open api playground with preselected api key
- Enable clear field function also in nested fields
- Make fields-manger + fields-renderer component available by default
- Set content model icon

## 2.0.1 (2022-07-17)

- Refactor admin ui localization
- Object.freeze App._vars + App._paths
- Make logged in user information available on the client side (App.user)
- Update .htaccess file to deny public access to php files except router entry index.php
- Add visual hover state to content item tables

## 2.0.0 (2022-07-13)

- Initial release 🍾🥳