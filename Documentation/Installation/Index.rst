.. include:: ../Includes.txt



.. _installation:

============
Installation
============

.. tip::

   Device versions are always matching the TYPO3 version you are running. So version 9.x should be installed with CMS 9.5 only, 10.x with CMS 10.x and so on.

The extension needs to be installed as any other extension of TYPO3 CMS:

#. Get the extension via **Extension Manager** or **Composer**.

   - Either switch to the module "Extension Manager", press the "Retrieve/Update" button, search for the extension key *localizer* and import the extension from the TYPO3 extension repository.
   - Or use the command `composer require coderscare/device` to make the extension available in the typo3conf/ext directory.

#. In any case witch to the module "Extension Manager" and click on the "activate" icon to install the extension.

Latest version from git
-----------------------
You can get the latest version from git by using the git command:

.. code-block:: bash

   git clone git@gitlab.com:Coders.Care/device.git

.. important::

   The master branch supports the latest TYPO3 version only. Other branches are numbered accordingly. Use i.e. the branch ``9-0`` if you are using TYPO3 CMS 9!