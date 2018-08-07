#! /bin/bash
# Merge pushes to development branch to stable branch
if [ ! -n $2 ] ; then
    echo "Usage: merge.sh <username> <password>"
    exit 1;
fi

GIT_USER="YassineZak"
GIT_PASS="Sniper159"
GITHUB_SECRET_TOKEN="610b59f18f89921b5c158f2feb6043e320c8235a"

# Specify the development branch and stable branch names
FROM_BRANCH="dev-environment"
TO_BRANCH="master"

# Get the current branch
export PAGER=cat
CURRENT_BRANCH=$"dev-environment"
echo "current branch is '$CURRENT_BRANCH'"

# Create the URL to push merge to
URL=$(git remote -v | head -n1 | cut -f2 | cut -d" " -f1)
echo "Repo url is $URL"
PUSH_URL="https://$GITHUB_SECRET_TOKEN@github.com/YassineZak/devShop.git"

if [ "$CURRENT_BRANCH" = "$FROM_BRANCH" ] ; then
    # Checkout the dev branch
    #git checkout $FROM_BRANCH && \
    #echo "Checking out $TO_BRANCH..." && \

    # Checkout the latest stable
    git remote add master $PUSH_URL
    git fetch --all && \
    git checkout $TO_BRANCH && \
    echo $GITHUB_SECRET_TOKEN && \


    # Merge the dev into latest stable
    echo "Merging changes..." && \
    git merge $FROM_BRANCH && \

    # Push changes back to remote vcs
    echo "Pushing changes..." && \
    echo "Merge complete!" || \
    echo "Error Occurred. Merge failed"
else
    echo "Not on $FROM_BRANCH. Skipping merge"
fi