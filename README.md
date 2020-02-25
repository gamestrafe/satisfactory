# Satisfactory.GameStrafe.com

Satisfactory page for the GameStrafe network.

Contributions are always welcome!

## Simple contributions

Clone the project locally:
`git clone git@github.com:gamestrafe/satisfactory.git`

Edit the MD files in _sources and that's it. This project uses [Sculpin](https://sculpin.io/) as a generator if you want to look up some more on that. If you add a page you also have to add a link to it in the place you think works best. All pages are automatically added to the sitemap.

Once you are done with your changes, open a merge request against the repo. Please have some good description on the commits and if you have to test around, squash the commits first.

## Advanced contributions

This uses docker. To run the box do `docker-compose up -d` and then you can use `docker exec -it satisfactory-phpfpm /bin/bash` to enter the box for running commands.

Other than that same above, make an MR.
